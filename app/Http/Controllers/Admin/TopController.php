<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    { 
        $ranking_users = User::orderBy('item_count', 'desc')->limit(50)->paginate(5);

        return view('Admin.top')->with([
            'user_countns' => User::count(),
            'ranking_users' => $ranking_users,
        ]);


    }
}
