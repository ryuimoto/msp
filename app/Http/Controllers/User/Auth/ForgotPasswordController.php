<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function broker()
    {
        return \Password::broker('users');
    }

    public function showLinkRequestForm()
    {
        return view('user.auth.password_reset');
    }

    protected function validateEmail(Request $request)
    {

        $rule       = [
            'email' => 'required|email'
        ];
        $messages   = [];
        $attributes = [
            'email' => 'メールアドレス',
        ];

        $this->validate(
            $request,
            $rule,
            $messages,
            $attributes
        );
    }

    protected function sendResetLinkResponse($response)
    {
        return view('user.auth.sent');
    }


}
