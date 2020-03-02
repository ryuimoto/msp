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

        $sales_data = $query->where('user_id',$user_id)
        ->where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5);

        return view('admin.individual_total')->with([
            'user_id' => $user_id,
            'date' => $carbon,
            'sales_datas' => $sales_data,
            'user' => $user,
            'sales_amount' => $sales_data->sum('expected_sale_price'),
        ]);
    }
}
