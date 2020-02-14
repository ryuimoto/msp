<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class A8SearchController extends Controller
{
    public function index()
    {
        return view('user.a8_search');
    }
}
