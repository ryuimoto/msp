<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Notice;

class TopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $notices = Notice::where('release_flag',true)->paginate(5);

        return view('user.top')->with([
            'notices' => $notices,
        ]);
    }
}
