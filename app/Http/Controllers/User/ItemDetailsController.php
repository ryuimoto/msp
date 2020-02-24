<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;

class ItemDetailsController extends Controller
{
    public function index($user_id)
    {
        $item = Item::where('id',$user_id)->first();

        return view('user.item_details')->with([
            'item' => $item,
        ]);
    }
}
