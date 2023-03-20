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
        
        return view('registrasi.kerjapraktek');

    }
    public function riset(){
        
        return view('registrasi.riset');

    }
    public function kunjungan(){
        
        return view('registrasi.kunjungan');

    }
    public function statuspendaftaran(){
        
        return view('registrasi.statuspendaftaran');

    }

    
}
