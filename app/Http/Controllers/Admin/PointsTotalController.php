<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class PointsTotalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $carbon = new Carbon();

        $points_datas =  Item::where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month);

        return view('admin.points_total')->with([
            'date' => $carbon,
            'points_amount' => $points_datas->sum('point'),
            'users' => $points_datas->paginate(10),
        ]);
    }

}
