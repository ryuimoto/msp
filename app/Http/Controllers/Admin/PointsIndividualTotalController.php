<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PointsIndividualTotalController extends Controller
{
    public function index()
    {
        return view('admin.points_individual_total');
    }
}
