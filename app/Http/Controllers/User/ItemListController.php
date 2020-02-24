<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\Item;
use App\SaleStatus;

class ItemListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $user = Auth::user();

        $items = Item::where('user_id',$user->id)->get();

        $sale_statuses = SaleStatus::get();

        return view('user.item_list')->with([
            'items' => $items,
            'sale_statuses' => $sale_statuses,
        ]);
    }
}
