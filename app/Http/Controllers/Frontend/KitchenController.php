<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function index(){
        return view('e-commerce.kitchen.kitchen');
    }
}
