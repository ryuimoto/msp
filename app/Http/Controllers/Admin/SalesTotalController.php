<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SalesTotalController extends Controller
{
    public function index()
    {
        return view('admin.sales_total');
    }
}
