<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class IndividualTotalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($item_id)
    {
   
        $carbon = new Carbon();

        $sales_data = Item::where('id',$item_id)->first();

        // dd($sales_data);

        return view('admin.individual_total')->with([
            'date' => $carbon,
            'user' => $sales_data,
            'user_id' => $user_id,
        ]);
    }
}
