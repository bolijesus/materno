<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function index(Request $request){

        \dd($request);

    }
}
