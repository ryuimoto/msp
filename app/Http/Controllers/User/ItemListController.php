<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemListController extends Controller
{
    public function index()
    {
        return view('user.item_list');
    }
}
