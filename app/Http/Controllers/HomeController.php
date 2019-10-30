<?php

namespace App\Http\Controllers;

use Validator;
use Spatie\Tags\Tag;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use RoobieBoobieee\Bitbucket\ActiveUser;

use App\Project;
use App\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('links')->take(6)->orderBy('weight')->get();

        $client = null;
        $whatpulse = '';
        if (Cache::has('whatpulse')) {
            $whatpulse = Cache::get('whatpulse');
        } else {
            try {
                $client = new \GuzzleHttp\Client();
                $response = $client->request('GET', 'https://api.whatpulse.org/user.php?user=roobieboobieee&format=json');
                if ($response->getStatusCode() == 200) {
                    $whatpulse = json_decode($response->getBody());
                    $expiresAt = now()->addDays(1)->setTime(0, 0, 0);

                    Cache::put('whatpulse', $whatpulse, $expiresAt);
                }
            } catch(\GuzzleHttp\Exception\RequestException $e) {

            }
        }

        $km = '';
        if (Cache::has('km')) {
            $km = Cache::get('km');
        } else {
            try {
                if (!$client) {
                  $client = new \GuzzleHttp\Client();
                }
                $response = $client->request('POST', 'https://api.hoeveelfilestaater.be/api/getWelcomeMessage');
                if ($response->getStatusCode() == 200) {
                    $km = json_decode($response->getBody());
                    $expiresAt = now()->addMinutes(5);

                    Cache::put('km', $km, $expiresAt);
                }
            } catch(\GuzzleHttp\Exception\RequestException $e) {

            }
        }

        $projectCount = Project::count();

        $bbCount = 0;
        if (Cache::has('bb_count')) {
            $bbCount = (int)Cache::get('bb_count');
        } else {
            $user = App::make(ActiveUser::class);
            $bbCount = $user->commits()->count();
            $expiresAt = now()->addHours(2);

            Cache::put('bb_count', $bbCount, $expiresAt);
        }

        return view('welcome', [
            'projects' => $projects,
            'whatpulse' => $whatpulse,
            'projectCount' => $projectCount,
            'bbCount' => $bbCount,
            'allTags' => Tag::all(),
            'km' => $km,
        ]);
    }

    public function contact(Request $request)
    {
        return;
        // Validate form input
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'message' => 'required|max:500',
        ];

        $messages = [
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()
                    ->route('home', ['#contact'])
                    ->withErrors($validator)
                    ->withInput();
        }
        // Validate Captcha
        $client = new Client();
        $resultponse = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('custom.GA.secret_key'),
                'response' => $request->input('g-recaptcha-response', null),
            ],
        ]);
        $resultponse = json_decode($resultponse->getBody());
        if ($resultponse->success) {
            // Mail::raw('This is the content of mail body', function ($message) use ($request) {
            //     $message->from($request->email, 'Website Contact Form');
            //     $message->to('info@robvankeilegom.be');
            //     $message->subject(implode("\n", $request->all()));
            // });
            Contact::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ]);
            return redirect()
                    ->route('home', ['#contact'])
                    ->with('success', 'Successfully sent!');
        } else {
            $validator->errors()->add('invalid_captcha', (config('app.debug') == 'TRUE') ? (implode(', ', $resultponse->{'error-codes'})) : 'Apparently, you are a robot?!' );
            return redirect()
                    ->route('home', ['#contact'])
                    ->withErrors($validator)
                    ->withInput();
        }
    }
}
