<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\Catch_;
use PhpParser\Node\Stmt\Throw_;

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

            $newsletter->subscribed(request('email'));
        } catch(Exception $e) {
            throw ValidationException::withMessages(['email' => 'This email could not be added to our newsletter list ']);
        }
        return redirect('/')->with('success', 'you are now signed up for our newsletter');
    }
}
