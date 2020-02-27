<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;


class UserRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return 34567800;

        // return view('admin.users_register');
    }

    public function register(Request $request)
    {
        // dd($request->all());

        $carbon = new Carbon();

        $request->validate([
            'name' => 'required|string',
            'real_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'tel' => 'required|regex:/^[0-9]{2,4}-[0-9]{2,4}-[0-9]{3,4}$/',
            'memo' => 'max:3000',
            'a8_acount_id' => 'required',
            'a8_acount_pass' => 'required',
            // 'rakuten_acount_id' => 'required',
            // 'rakuten_acount_pass' => 'required',
        ],[
            'tel.regex' => '電話番号は000-000-000 のフォーマットで入力してください',
        ]);

        User::Create([
            'name' => $request->name,
            'real_name' => $request->real_name,
            'email' => $request->email,
            'password' => $request->password,
            'tel' => $request->tel,
            'memo' => $request->memo,
            'item_count' => 0,
            'restriction_flag' => $request->restriction_flag,
            'a8_acount_id' => $request->a8_acount_id,
            'a8_acount_pass' => $request->a8_acount_pass,
            'rakuten_acount_id' => $request->rakuten_acount_id,
            'rakuten_acount_pass' => $request->rakuten_acount_pass,
            'restriction_flag' => true,
            'last_operation_date' => $carbon,
            'last_login_date' => $carbon,

        ]);

        return back()->with([
            'success_message' => 'アカウントを追加しました', 
        ]);
    }
}
