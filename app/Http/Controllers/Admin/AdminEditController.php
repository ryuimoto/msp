<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.admin_edit');
    }

    public function edit(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
        ]);

        return back()->with([
            'success_message' => 'アカウントを変更しました'
        ]);

    }
}
