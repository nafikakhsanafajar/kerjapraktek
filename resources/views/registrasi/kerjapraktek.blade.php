@extends('layouts.appkp')
@section('content')
<?php 
    $daterightnow = date('Y-m-d');
    if(isset($_COOKIE['dateabsensi'])){
        $daterightnow = $_COOKIE['dateabsensi'];
    }

?>
    
     <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                           <h3>REGISTRASI KERJA PRAKTEK</h3>
                           <p>Lakukan pendaftaran Kerja Praktek anda dengan mengisi form dibawah ini:</p>
                        </div>
                        <!-- End Tab Info -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                     
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Tingkat Institusi</label>
	                                    <div class="col-sm-8">
                                            <select name="tingkatinstitusi" data-placeholder="Choose One" class="width300 select2-offscreen tingkatinstitusi" tabindex="-1" title="" style="width: 100%">
                                                <option namaarea="TK" value="TK">TK</option>
	                                            <option namaarea="SD" value="SD">SD</option>
                                                <option namaarea="SMP" value="SMP">SMP</option>
                                                <option namaarea="SMA" value="SMA">SMA</option>
                                                <option namaarea="S1" value="S1">S1</option>
                                                <option namaarea="S2" value="S2">S2</option>
                                                <option namaarea="S3" value="S3">S3</option>
                                                <option namaarea="UMUM" value="UMUM">UMUM</option>
	                                        </select>
	                                    </div>
	                                    
	                                </div>
                                    
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Nama Institusi </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="namainstitusi" value="" id="namainstitusi" class="form-control namainstitusi"  required>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Lokasi</label>
	                                    <div class="col-sm-8">
                                            <select name="lokasi" data-placeholder="Choose One" class="width300 select2-offscreen lokasi" tabindex="-1" title="" style="width: 100%">
                                                <option namaarea="KRUMPUT" value="KEBUN KRUMPUT">KEBUN KRUMPUT</option>
	                                            <option namaarea="KAWUNG" value="KEBUN KAWUNG">KEBUN KAWUNG</option>
                                                <option namaarea="WARNASARI" value="KEBUN WARNASARI">KEBUN WARNASARI</option>
	                                        </select>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Total Biaya </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="totalbiaya" value="" id="totalbiaya" class="form-control totalbiaya"  readonly>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Tanggal Pelaksanaan</label>
	                                    <div class="col-sm-8">
	                                        <div class="input-group mb15">
	                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                                            <input type="text" placeholder="yyyy-mm-dd" class="form-control datepickerstart" id="datepickerstart" value="{{$daterightnow}}" readonly='readonly' required>
	                                        </div><!-- input-group -->
	                                    </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                                    
                                    
                                    <div class="form-group opsidateclass row">
	                                    <input type="hidden" name="tipekp" value="KP" id="id_user" class="form-control id" readonly="readonly" required>
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Nama </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="nama" value="" id="nama" class="form-control nama"  required>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group opsidateclass row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">NIM/NIS </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="nim" value="" id="nim" class="form-control nim"  required>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Email </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="email" value="" id="email" class="form-control email"  required>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">No Telp / HP </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="notelp" value="" id="notelp" class="form-control notelp"  required>
	                                    </div>
	                                    
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Perihal Kerja Praktek</label>
	                                    <div class="col-sm-8">
	                                        <input type="text" step="any" name="judul" value="" id="judul" class="form-control judul"  required>
	                                    </div>
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">File Surat Institusi</label>
	                                    <div class="col-sm-8">
	                                        <input type="file" step="any" name="judul" value="" id="judul" class="form-control judul"  required>
	                                    </div>
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">File Kerja Praktek / CV</label>
	                                    <div class="col-sm-8">
	                                        <input type="file" step="any" name="judul" value="" id="judul" class="form-control judul"  required>
	                                    </div>
	                                </div>
                                    <div class="panel-body button-action">
	                                    <button class="btn btn-primary btn-rounded addplanner" >Submit</button>
	                                </div>
	                                <div class="panel-body" id="errorMessage"> 
	                                        
	                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Sidebar -->

                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    @endsection
    @section('jsbottom')
    <!-- End Fun Factor -->
    <script type="text/javascript">

	
        $(".tingkatinstitusi, .lokasi").select2();
        $('.datepickerstart').datepicker({
	        
	        autoclose: true,
	        startDate: new Date(2021, 10, 1),
	        format: "yyyy-mm-dd"
	    }).on('changeDate', function(e) {
	        var dateText = $('.datepickerstart').val();
	    });
        
    </script>
@endsection