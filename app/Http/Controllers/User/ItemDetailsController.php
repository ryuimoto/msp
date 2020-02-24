<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\SaleStatus;

class ItemDetailsController extends Controller
{
    public function index($user_id)
    {
        return view('user.item_details')->with([
            'item' => Item::where('id',$user_id)->first(),
            'sale_statuses' => SaleStatus::get(),
        ]);
    }

    public function edit(Request $request)
    {
        if($request->edit)
        {

        }else{
            return $this->delete($request);
        }

    }

    public function delete()
    {
        return "削除メソッドです";
    }
}
