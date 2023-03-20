<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

use DataTables;
use Excel;


class HomeController extends Controller
{
    public function homepage(){
        return view('home');

    }

    
}
