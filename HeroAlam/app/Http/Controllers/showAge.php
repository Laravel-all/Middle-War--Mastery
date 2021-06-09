<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showAge extends Controller
{
    public function index(Request $request){
        echo "welcome you are $request->age years old";
    }
}
