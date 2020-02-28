<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;


class IndividualTotalMonthlyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($user_id,$date)
    {
        $date = preg_replace('/[^0-9]/', '', $date.'01');

        $change_date = date('Y-m-1 H:i',strtotime($date));

        $user = User::where('id',$user_id)->first();

        $carbon = new Carbon($change_date);

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
