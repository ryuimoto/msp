<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;

class RakutenSearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        // $client = new Client();

        // $login_page = $client->request('GET', 'https://grp01.id.rakuten.co.jp/rms/nid/vc?__event=login&service_id=top');

        // $login_form = $login_page->selectButton('submit')->form();

        // dd($login_form);

        return view('user.rakuten_search');
    }
}
