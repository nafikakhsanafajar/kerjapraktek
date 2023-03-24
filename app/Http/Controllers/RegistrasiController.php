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
        $koderegister = "";
        if(isset($_GET['kode_register'])){
            $koderegister = $_GET['kode_register'];
        }
        
        $datausers = DB::table('peserta')
        ->where('kode_register','=',$koderegister)
        ->get();  
        $totaldata = count($datausers);
        // dd($datausers);
        return view('registrasi.statuspendaftaran', compact('datausers','totaldata','koderegister'));

    }

    

    
}
