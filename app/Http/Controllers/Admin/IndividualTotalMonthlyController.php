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

    public function index($user_id,$date,Request $request)
    {
        $keyword = $request->input('search');

        $query = Item::query();
        $date = preg_replace('/[^0-9]/', '', $date.'01');

        $change_date = date('Y-m-1 H:i',strtotime($date));

        $carbon = new Carbon($change_date);

        if(!empty($keyword))
        {
            $query->orwhere('id','like','%'. $keyword .'%')
            ->orWhere('status_change_date','like','%'.$keyword.'%');
        }



        $user = User::where('id',$user_id)->first();

        $sales_data = $query->where('user_id',$user_id)
        ->where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5);

        return view('admin.individual_total_date')->with([
            'user_id' => $user_id,
            'date' => $carbon,
            'sales_datas' => $sales_data,
            'user' => $user,
            'sales_amount' => $sales_data->sum('expected_sale_price'),
        ]);

    }
}
