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
        return view('Admin.top')->with([
            'user_countns' => User::count(),
            'users' => User::limit(50)->paginate(5),
        ]);
    }
}
