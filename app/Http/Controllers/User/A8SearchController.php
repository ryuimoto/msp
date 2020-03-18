<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;
use Illuminate\Support\Facades\Auth;

use App\A8Category;
use App\User;

class A8SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        return view('user.a8_search');
    }

    public function search(Request $request)
    {
        $user = Auth::user();
        $login_data = User::where('id',$user->id)->first();
        $client = new Client();

        $login_page = $client->request('GET', 'https://www.a8.net/');

        $login_form = $login_page->selectButton('lgin_as_btn')->form();

        $login_form['login'] = $login_data->a8_acount_id;
        $login_form['passwd'] = $login_data->a8_acount_pass;
    
        $after_login_page = $client->submit($login_form);

        if($after_login_page->getUri() == 'https://pub.a8.net/a8v2/asMemberAction.do')
        {   
            $search_page = $client->request('GET','https://pub.a8.net/a8v2/asSearchAction.do');

            $search_form = $search_page->filter('form')->form();

            // // dd(mb_convert_encoding($request->keyword,"EUC-JP"));

            $search_form['keyword'] = mb_convert_encoding($request->keyword, "EUC-JP", "UTF-8,SJIS,EUC-JP,auto");

            // // dd($search_form['keyword']);

            $result = $client->submit($search_form);

            // dd($result->filter('div.scdWrapper'));
            dd($result->filter('div.scdWrapper')->text());

            // $result_datas = [];

            // $result->filter('td.iconArea1')->each(function($values) use(&$result_datas){            
            //     $retu = $values->filter('tr')->eq(4)->filterXPath('./*/td');

            //     $result_datas[] = [
            //         'advertiser' => $values->filter('tr')->eq(0)->filterXPath('./*/td')->text(),
            //         'program_name' => $values->filter('tr')->eq(1)->filterXPath('./*/td')->text(),
            //         'corresponding_device' => $values->filter('tr')->eq(2)->filterXPath('./*/td')->text(),
            //         'performance_reward' => $values->filter('tr')->eq(3)->filterXPath('./*/td')->text(),
            //         'cooperation_screening' => $retu->eq(0)->text(),
            //         'return_visit_period' => $retu->eq(1)->text(),
            //         'estimated_results' => $retu->eq(2)->text(),
            //         'keyword' => $values->filter('tr')->eq(5)->filterXPath('./*/td')->text(),
            //     ];
            // });

            // return view('user.a8_search_result')->with([
            //     'result_datas' => $result_datas,
            // ]);

            #new_mainArea2clm > form > table.programSearch > tbody > tr:nth-child(1) > td.iconArea1

        }else{
            return "ログインできなかったようです。運営に問い合わせてください。";
        }
    }
}
