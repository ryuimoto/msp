<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index($user_id)
    {
        // dd($user_id);

        return 12345;

        dd(User::where('id',$user_id)->first());

        return view('admin.users_edit')->with([
            'data' => User::where('id',$user_id)->first(),
        ]);
    }
}
