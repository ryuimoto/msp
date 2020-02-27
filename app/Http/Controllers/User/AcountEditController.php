<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use App\User;

class AcountEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }
    
    public function index()
    {
        $user = Auth::user();
    
        return view('user.acount_edit')->with([
            'user' => $user,
        ]);
    }

    public function edit(Request $request)
    {
        $user = Auth::user();

        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
            'email' => [
                'required',
                Rule::unique('users')->ignore($user->id),
            ]

        ]);

        User::where('id',$user->id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return back()->with([
            'success_message' => 'アカウントを編集しました',
        ]);
    }
}
