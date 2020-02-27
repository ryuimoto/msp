<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;

use App\User;

class UserEditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($user_id)
    {
        return view('admin.users_edit')->with([
            'data' => User::where('id',$user_id)->first(),
        ]);
    }

    public function edit(Request $request)
    {

        $user = User::where('id',$request->id)->first();

        if($request->edit)
        {
            $request->validate([
                'name' => 'required|string',
                'real_name' => 'required|string',
                'email' => [
                    'required',
                    Rule::unique('users')->ignore($user->id),
                ],
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

            User::where('id',$request->id)->update([
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
            ]);

            return back()->with([
                'success_message' => 'アカウントを編集しました',
            ]);

        }else{
            return $this->delete($request);
        }

    }

    public function delete(Request $request)
    {
        User::where('id',$request->id)->delete();

        return redirect()->route('admin.users_list');
    }
}
