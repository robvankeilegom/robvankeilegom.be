<?php

namespace App\Http\Controllers;

use Validator;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;

use App\Project;
use App\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('links')->take(6)->orderBy('weight')->get();


        if (Cache::has('whatpulse')) {
            $whatpulse = Cache::get('whatpulse');
        } else {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.whatpulse.org/user.php?user=roobieboobieee&format=json');
            if ($response->getStatusCode() == 200) {
                $whatpulse = json_decode($response->getBody());
                $expiresAt = now()->addDays(1)->setTime(0, 0, 0);

                Cache::put('whatpulse', $whatpulse, $expiresAt);
            }
        }

        $projectCount = Project::count();

        return view('welcome', [
            'projects' => $projects,
            'whatpulse' => $whatpulse,
            'projectCount' => $projectCount,
        ]);
    }

    public function contact(Request $request)
    {
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
