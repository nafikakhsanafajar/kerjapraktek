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
    public function func_insertkerjapraktek(Request $request){
 
        $daterightnow       = date('Y-m-d');
        $datekode = date('dmyy');
        $namainstitusi            = $request->input('namainstitusi');
        $tingkatinstitusi         = $request->input('tingkatinstitusi');
        $tipe         = $request->input('tipe');
        $lokasi         = $request->input('lokasi');
        $startdateText         = $request->input('startdateText');
        $enddateText         = $request->input('enddateText');
        $totalbiaya         = $request->input('totalbiaya');
        $nim         = $request->input('nim');
        $email         = $request->input('email');
        $notelp         = $request->input('notelp');
        $judul         = $request->input('judul');
        $judulsi         = $request->file('judulsi');
        $judulfile         = $request->file('judulfile');
        $filenamesi = "";
        $filenamedockp = "";
        $koderegister ="KP-".$datekode.".".rand(10,1000);
        $password =bcript($koderegister);


        if($judulsi!="" and $judulsi->getClientOriginalExtension()=="pdf"){
            // $file = $request->file('judulsi');
            $filenamesi = $nik.'.'.date('ymd').time().'.'.$request->file('judulsi')->getClientOriginalExtension();
            $path = $file->move(public_path('suratinstitusi'), $filename);
        }    
        if($judulfile!="" and $judulfile->getClientOriginalExtension()=="pdf"){
            // $file = $request->file('judulsi');
            $filenamedockp = $nik.'.'.date('ymd').time().'.'.$request->file('judulfile')->getClientOriginalExtension();
            $path = $file->move(public_path('dockp'), $filename);
        }  
        
        $id= DB::table('peserta')->insertGetId([
            'kode_register'             => $koderegister, 
            'password'             => $password,
            'jml_peserta'        => 1, 
            'jenis'       => "KP", 
            'tingat_institusi'     => $tingkatinstitusi,
            'nama_institusi'              => $namainstitusi, 
            'surat_ins'    => $filenamesi,
            'email'     => $email, 
            'hp'     => $notelp, 
            'id_lokasi'            => $lokasi,
            'tot_biaya'          => $totalbiaya,
            'tgl_pelaksanaan'          => $startdateText,
            'tgl_akhir'          => $enddateText,
            'status'          => 1,
            'nim'          => $nim,
            'nama'          => $nama,
            'judul'          => $judul,
            'file_izin'          => $filenamedockp
        ]);
        
        
        return "Sukses";

    }

    

    
}
