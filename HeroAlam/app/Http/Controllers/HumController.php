<?php

namespace App\Http\Controllers;

use App\Http\Middleware\TestMiddleware;
use Illuminate\Http\Request;

class HumController extends Controller
{
    // public function __constructor(){
    //     $this->middleware(TestMiddleware::class);
    // }


    public function __constructor(){
        $this->middleware('tom');
    }

    public function test(){
        return "done";
    }
}
