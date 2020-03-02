<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Illuminate\Support\Facades\Auth;

use App\User;

class RakutenSearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $client = new Client();
        $user = Auth::user();

        $login_data = User::where('id',$user->id)->first();

        $login_page = $client->request('GET', 'https://grp01.id.rakuten.co.jp/rms/nid/vc?__event=login&service_id=top');

        $login_form = $login_page->selectButton('submit')->form();

        // $login_form['u'] = $login_data->rakuten_acount_id;
        // $login_form['p'] = $login_data->rakuten_acount_pass;

        $login_form['u'] = 'narrow617@gmail.com ';
        $login_form['p'] = 'Lemontea7660';


        $after_login_page = $client->submit($login_form);

        dd($after_login_page);

        return view('user.rakuten_search');
    }
}
