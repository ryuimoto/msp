<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Goutte\Client;

use App\A8Category;

class A8SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index($categorys)
    {

        // $client = new Client();

        // $login_page = $client->request('GET', 'https://www.a8.net/');

        // $login_form = $login_page->selectButton('lgin_as_btn')->form();

        // dd($login_form);

        // $login_form['login'] = 'narrow617';
        // $login_form['passwd'] = 'Lemontea7660';

        // $after_login_page = $client->submit($login_form);

        // dd($after_login_page);

        return view('user.a8_search')->with([
            'categorys' => $categorys,
        ]);

    }

    public function queryCategory()
    {
        $categorys = [
            // 'category1' => A8Category::where('parent_name','総合通販')
            // ->orwhere('parent_name','金融・投資・保険')->orwhere('parent_name','インターネット接続')->get(),
            
            'parent_1' => A8CategoryParent::where('id',1)
            ->orwhere('id',2)->orwhere('id',3)->get(),

            'parent_2' => A8CategoryParent::where('id',4)
            ->orwhere('id',5)->orwhere('id',6)->get(),

            'parent_3' => A8CategoryParent::where('id',7)
            ->orwhere('id',8)->orwhere('id',9)->get(),

            'child_1' => A8CategoryChild::where('parent_id',1)->get(),
            'child_2' => A8CategoryChild::where('parent_id',2)->get(),
            'child_3' => A8CategoryChild::where('parent_id',3)->get(),
            'child_4' => A8CategoryChild::where('parent_id',4)->get(),
            'child_5' => A8CategoryChild::where('parent_id',5)->get(),
            'child_6' => A8CategoryChild::where('parent_id',6)->get(),
            'child_7' => A8CategoryChild::where('parent_id',7)->get(),
            'child_8' => A8CategoryChild::where('parent_id',8)->get(),
            'child_9' => A8CategoryChild::where('parent_id',9)->get(),
            'child_10' => A8CategoryChild::where('parent_id',10)->get(),
            'child_11' => A8CategoryChild::where('parent_id',11)->get(),
            'child_12' => A8CategoryChild::where('parent_id',12)->get(),
            'child_13' => A8CategoryChild::where('parent_id',13)->get(),
            'child_14' => A8CategoryChild::where('parent_id',14)->get(),
            'child_15' => A8CategoryChild::where('parent_id',15)->get(),
            'child_16' => A8CategoryChild::where('parent_id',16)->get(),
            'child_17' => A8CategoryChild::where('parent_id',17)->get(),

        ];

        return $this->index($categorys);
    }
}
