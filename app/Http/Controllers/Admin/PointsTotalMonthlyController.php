<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class PointsTotalMonthlyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($date,Request $request)
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

        $points_datas =  Item::where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5);

        return view('admin.points_total')->with([
            'date' => $carbon,
            'points_amount' => $points_datas->sum('point'),
            'users' => $points_datas,
        ]);
        
    }
}
