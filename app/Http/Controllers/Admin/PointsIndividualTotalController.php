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

    public function index($user_id,Request $request)
    {
        $keyword = $request->input('search');

        $query = Item::query();
        $carbon = new Carbon();

        if(!empty($keyword))
        {
            $query->orwhere('id','like','%'. $keyword .'%')
            ->orWhere('status_change_date','like','%'.$keyword.'%');
        }

        $user = User::where('id',$user_id)->first();

        $points_datas = $query->where('user_id',$user_id)
        ->where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5);
    
        return view('admin.points_individual_total')->with([
            'user' => $user,
            'date' => $carbon,
            'points_amount' => $points_datas->sum('point'),
            'points_datas' => $points_datas,
        ]);
    }
}
