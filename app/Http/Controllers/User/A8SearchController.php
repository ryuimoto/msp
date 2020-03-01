<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Goutte;
use Illuminate\Support\Facades\Auth;

use App\A8Category;
use App\User;

class A8SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function a8Login()
    {
        $client = new Client();
        $user = Auth::user();
        $login_data = User::where('id',$user->id)->first();

        $login_page = $client->request('GET', 'https://www.a8.net/');

        $login_form = $login_page->selectButton('lgin_as_btn')->form();

        $login_form['login'] = $login_data->a8_acount_id;
        $login_form['passwd'] = $login_data->a8_acount_pass;

        $after_login_page = $client->submit($login_form);

        // ログインチェック
        if($after_login_page->getUri() == 'https://pub.a8.net/a8v2/asMemberAction.do')
        {
            return $this->index();
        }else{
            return "ログインできなかったようです。運営に問い合わせてください。";
        }
    }

    public function index()
    {
        return view('user.a8_search');
    }
}
