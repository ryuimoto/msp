<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Item;

class ItemListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $user = Auth::user();

        // $items = Item::where('user_id')->get();

        return view('user.item_list');
    }
}
