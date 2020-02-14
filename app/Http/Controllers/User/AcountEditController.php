<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcountEditController extends Controller
{
    public function index()
    {
        return view('user.acount_edit');
    }
}
