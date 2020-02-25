<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use App\Item;

class SalesMonthlyAggregationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index($date)
    {
        $date = preg_replace('/[^0-9]/', '', $date);

        $carbon = new Carbon($date);

        $items = Item::where([
            'user_id' => $user->id, 
            'sale_status' => 2,
        ]);

        // $selling_price = 

        return view('user.salse_monthly_aggregation')->with([
            'date' => $carbon,
            // 'selling_price' => 
        ]);
    }
}
