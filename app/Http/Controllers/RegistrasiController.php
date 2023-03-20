<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

use DataTables;
use Excel;


class RegistrasiController extends Controller
{
    public function kerjapraktek(){
        $daterightnow = date('Y-m-d');
        return view('registrasi.kerjapraktek', compact('daterightnow'));

    }
    public function riset(){
        $daterightnow = date('Y-m-d');
        return view('registrasi.riset', compact('daterightnow'));

    }
    public function kunjungan(){
 
        $daterightnow = date('Y-m-d');
        
        return view('registrasi.kunjungan', compact('daterightnow'));

    }
    public function statuspendaftaran(){
        
        return view('registrasi.statuspendaftaran');

    }

    
}
