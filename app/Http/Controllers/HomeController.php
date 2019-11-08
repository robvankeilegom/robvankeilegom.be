<?php

namespace App\Http\Controllers;

use Validator;
use App\Contact;
use App\Project;
use Spatie\Tags\Tag;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('links')->take(6)->orderBy('weight')->get();

        $client    = null;
        $whatpulse = '';

        if (Cache::has('whatpulse')) {
            $whatpulse = Cache::get('whatpulse');
        }

        $km = '';

        if (Cache::has('km')) {
            $km = Cache::get('km');
        }

        $projectCount = Project::count();

        $commitCount = 0;

        if (Cache::has('bb_count')) {
            $commitCount += (int) Cache::get('bb_count');
        }

        if (Cache::has('gl_count')) {
            $commitCount += (int) Cache::get('gl_count');
        }

        return view('welcome', [
            'projects'     => $projects,
            'whatpulse'    => $whatpulse,
            'projectCount' => $projectCount,
            'commitCount'  => $commitCount,
            'allTags'      => Tag::all(),
            'km'           => $km,
        ]);
    }

    public function contact(Request $request)
    {
        return;
        // Validate form input
        $rules = [
            'name'    => 'required|max:255',
            'email'   => 'required|max:255|email',
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
        $client      = new Client();
        $resultponse = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => config('custom.GA.secret_key'),
                'response' => $request->input('g-recaptcha-response', null),
            ],
        ]);
        $resultponse = json_decode($resultponse->getBody());

        if ($resultponse->success) {
            Contact::create([
                'name'    => $request->name,
                'email'   => $request->email,
                'phone'   => $request->phone,
                'message' => $request->message,
            ]);

            return redirect()
                ->route('home', ['#contact'])
                ->with('success', 'Successfully sent!');
        }
        $validator->errors()->add('invalid_captcha', (config('app.debug') == 'TRUE') ? (implode(', ', $resultponse->{'error-codes'})) : 'Apparently, you are a robot?!');

        return redirect()
            ->route('home', ['#contact'])
            ->withErrors($validator)
            ->withInput();
    }
}
