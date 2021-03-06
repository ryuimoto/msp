<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UsersListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $query = User::query();

        if(!empty($keyword))
        {
            $id = explode(',', $keyword);

            $query->whereIn('id',$id)
            ->orwhere('id','like','%'. $keyword .'%')
            ->orWhere('name','like','%'.$keyword.'%')
            ->orWhere('real_name','like','%'.$keyword.'%')
            ->orWhere('email','like','%'.$keyword.'%')
            ->orWhere('item_count','like','%'.$keyword.'%')
            ->orWhere('last_operation_date','like','%'.$keyword.'%')
            ->orWhere('last_login_date','like','%'.$keyword.'%');
        }

        $users = $query->orderBy('id','asc')->paginate(5);

        return view('admin.users_list')->with([
            'users' => $users,
            'search' => $keyword,
        ]);
    }

    // public function search(Request $request)
    // {
    //     $keyword = $request->input('search');

    //     $query = User::query();

    //     if(!empty($keyword))
    //     {
    //       $query->where('name','like','%'.$keyword.'%')->orWhere('mail','like','%'.$keyword.'%');
    //     }

    //     dd($keyword);
    // }
}
