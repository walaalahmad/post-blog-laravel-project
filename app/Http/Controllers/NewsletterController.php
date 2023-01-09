<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);
        try {
            $newsletter->supscribe(request('email'));

        } catch (\Exception $e) {
            throw ValidationException::withMessages(
                ['email' => 'not subscribed']
            );
        }
        return redirect('/')->with('success', 'your Email has been subscribed');


    }
}
