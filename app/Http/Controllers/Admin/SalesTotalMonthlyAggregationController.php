<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class SalesTotalMonthlyAggregationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request,$date)
    {
        $date = preg_replace('/[^0-9]/', '', $date.'01');

        $change_date = date('Y-m-1 H:i',strtotime($date));
        $carbon = new Carbon($change_date);

        $keyword = $request->input('search');

        $query = Item::query();

        if(!empty($keyword))
        {
            $query->orwhere('id','like','%'. $keyword .'%')
            ->orWhere('status_change_date','like','%'.$keyword.'%');
        }


        $sales_datas = Item::where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5); 

        return view('admin.sales_total_date')->with([
            'date' => $carbon,
            'sales_amount' => $sales_datas->sum('expected_sale_price'), 
            'users' => $sales_datas,
        ]);
    }
}
