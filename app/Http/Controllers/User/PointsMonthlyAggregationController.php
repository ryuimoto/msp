<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use App\Item;

class PointsMonthlyAggregationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index($date)
    {
        $date = preg_replace('/[^0-9]/', '', $date.'01');
        
        $change_date = date('Y-m-1 H:i',strtotime($date));
        
        $carbon = new Carbon($change_date);

        $user = Auth::user();

        $points = Item::where([
            'user_id' => $user->id, 
            'sale_status' => 2,
        ])->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month);

        $selling_point = $points->sum('point');

        return view('user.points_aggregate')->with([
            'date' => $carbon,
            'selling_point' => $selling_point,
            'points' => $points->get(),
        ]);
    }
}
