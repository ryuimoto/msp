<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserEditController extends Controller
{
    public function index($user_id)
    {
        // dd($user_id);

        return view('admin.users_edit')->with([
            'datas' => User::where('id',$user_id)->first(),
        ]);
    }
}
