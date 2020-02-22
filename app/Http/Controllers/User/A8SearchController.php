<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;

class A8SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        // $client = new Client();

        // $login_page = $client->request('GET', 'https://www.a8.net/');

        // $login_form = $login_page->selectButton('lgin_as_btn')->form();

        // // dd($login_form);

        // $login_form['login'] = 'narrow617';
        // $login_form['passwd'] = 'Lemontea7660';

        // $after_login_page = $client->submit($login_form);

        // dd($after_login_page);

        return view('user.a8_search');
    }
}
