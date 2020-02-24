<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Item;
use App\SaleStatus;

class ItemDetailsController extends Controller
{
    public function index($item_id)
    {
        return view('user.item_details')->with([
            'item' => Item::where('id',$item_id)->first(),
            'sale_statuses' => SaleStatus::get(),
        ]);
    }

    public function edit(Request $request,$item_id)
    {

        if($request->edit)
        {
            $request->validate([
                'product_name' => 'required|string',
                'purchase_price' => 'required|integer',
                'expected_sale_price' => 'required|integer',
                'point' => 'required|integer',
                'sale_status' => 'required|integer',
                'memo' => 'max:500',
            ]);

            Item::where('id',$item_id)->update([
                'product_name' => $request->product_name,
                'purchase_price' => $request->purchase_price,
                'expected_sale_price' => $request->expected_sale_price,
                'point' => $request->point,
                'sale_status' => $request->sale_status,
                'memo' => $request->memo,
            ]);

            return back();

        }else{
            return $this->delete($request,$item_id);
        }
    }

    public function delete(Request $request,$item_id)
    {
        Item::where('id',$item_id)->delete();

        return redirect()->route('user.item_list');
    }
}
