<?php

namespace App\Http\Controllers;

use Validator;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Project;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::with('links')->take(6)->orderBy('weight')->get();
        return view('welcome', [
            'projects' => $projects,
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

        $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => ENV('GOOGLE_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response', null),
            ],
        ]);
        $response = json_decode($response->getBody());
        if ($response->success) {
            Mail::raw('This is the content of mail body', function ($message) {
                $message->from($request->email, 'Website Contact Form');
                $message->to('info@robvankeilegom.be');
                $message->subject(implode("\n", $request->all()));
            });
            return redirect()
                    ->route('home', ['#contact'])
                    ->with('success', 'Successfully sent!');
        } else {
            $validator->errors()->add('invalid_captcha', (env('APP_DEBUG') == 'TRUE') ? (implode(', ', $response->{'error-codes'})) : 'Apparently, you are a robot?!' );
            return redirect()
                    ->route('home', ['#contact'])
                    ->withErrors($validator)
                    ->withInput();
        }
    }
}
