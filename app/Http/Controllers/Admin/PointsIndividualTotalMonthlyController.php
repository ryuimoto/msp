<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;


class PointsIndividualTotalMonthlyController extends Controller
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

        $points_datas =  Item::where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month);

        return view('admin.points_individual_total')->with([
            'user_id' => $user_id,
            'date' => $carbon,
            'user' => $user,
            'points_amount' => $points_datas->sum('point'),
            'points_datas' => $points_datas->paginate(10),
        ]);

    }
}
