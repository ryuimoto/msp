<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\User;
use App\Item;

class SalesTotalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request)
    {
        $keyword = $request->input('search');

        $query = Item::query();
        $carbon = new Carbon();

        if(!empty($keyword))
        {
            $query->orwhere('id','like','%'. $keyword .'%')
            ->orWhere('status_change_date','like','%'.$keyword.'%');
        }

        $sales_datas = $query->where('sale_status',2)
        ->whereYear('status_change_date',$carbon->year)
        ->whereMonth('status_change_date',$carbon->month)
        ->orderBy('id','asc')->paginate(5);
        
        return view('admin.sales_total')->with([
            'date' => $carbon,
            'sales_amount' => $sales_datas->sum('expected_sale_price'), 
            'users' => $sales_datas,
        ]);
    }
}
