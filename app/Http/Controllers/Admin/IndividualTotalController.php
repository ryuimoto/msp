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

    public function index($user_id)
    {
        $carbon = new Carbon();

        $user = User::where('id',$user_id)->first();

        $sales_data = Item::where('user_id',$user_id)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month);

        return view('admin.individual_total')->with([
            'user_id' => $user_id,
            'date' => $carbon,
            'sales_datas' => $sales_data->get(),
            'user' => $user,
            'sales_amount' => $sales_data->sum('expected_sale_price'),
        ]);
    }
}
