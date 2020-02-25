<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use App\SaleStatus;
use App\Item;


class ItemRegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        return view('user.item_register')->with([
            'sale_statuses' => SaleStatus::get(),
        ]);
    }

    public function register(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'product_name' => 'required|string',
            'purchase_price' => 'required|integer',
            'expected_sale_price' => 'required|integer',
            'point' => 'required|integer',
            'sale_status' => 'required|integer',
            'memo' => 'max:500', 
        ]);

        Item::Create([
            'user_id' => $user->id,
            'product_name' => $request->product_name,
            'purchase_price' => $request->purchase_price,
            'expected_sale_price' => $request->expected_sale_price,
            'point' => $request->point,
            'sale_status' => $request->sale_status,
            'memo' => $request->memo,
        ]);

        return back()->with('success_message','アイテムを追加しました');
    }
}
