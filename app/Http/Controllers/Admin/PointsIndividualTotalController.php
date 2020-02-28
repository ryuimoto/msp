<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class PointsIndividualTotalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index($user_id)
    {
        $carbon = new Carbon();

        $user = User::where('id',$user_id)->first();

        $points_datas =  Item::where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month);
    
        return view('admin.points_individual_total')->with([
            'user' => $user,
            'date' => $carbon,
            'points_amount' => $points_datas->sum('point'),
            'points_datas' => $points_datas->paginate(10),
        ]);
    }
}
