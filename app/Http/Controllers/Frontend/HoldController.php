<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HoldController extends Controller
{
    public function index(){
        return view('e-commerce.hold.hold');
    }
}
