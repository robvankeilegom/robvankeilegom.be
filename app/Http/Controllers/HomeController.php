<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use GuzzleHttp\Client;

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
                'secret' => ENV('G_SECRET_KEY'),
                'response' => $request->input('g-recaptcha-response', null),
            ],
        ]);
        $response = json_decode($response->getBody());
        if ($response->success) {
            mail('info@robvankeilegom.be', 'contact form: ' . $request->email, $request->message);
            return redirect()
                    ->route('home', ['#contact'])
                    ->with('status', 'Successfully sent!');
        } else {
            return redirect()
                    ->route('home', ['#contact'])
                    ->withErrors(['invalid_captcha' => 'Apparently, you are a robot?!'])
                    ->withInput();
        }
    }
}
