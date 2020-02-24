<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
     /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

        /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    protected function redirectTo()
    {
        return route('user.top');
    }
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:user');
    }

    protected function guard()
    {
        return \Auth::guard('user');
    }

    public function broker()
    {
        return \Password::broker('users');
    }

    public function sendPasswordResetNotification($token)
    {
        if (is_null($token)) {
            return $this->getEmail();
        }

        $email = $request->input('email');

        if (property_exists($this, 'resetView')) {
            return view($this->resetView)->with(compact('token', 'email'));
        }

        if (view()->exists('user.auth.passwords.reset')) {
            return view('user.auth.passwords.reset')->with(compact('token', 'email'));
        }
        
        return view('user.auth.passwords.reset')->with(compact('token', 'email'));


        // $this->notify(new ResetPasswordNotification($token));
    }





}
