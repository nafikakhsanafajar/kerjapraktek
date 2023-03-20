@extends('layouts.appkp')
@section('content')
    
     <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                           <h3>REGISTRASI RISET & PENELITIAN</h3>
                           <p>Lakukan pendaftaran Riset & Penelitian anda dengan mengisi form dibawah ini:</p>
                        </div>
                        <!-- End Tab Info -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                     
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Tingkat Institusi</label>
	                                    <div class="col-sm-8">
                                            <select name="tingkatinstitusi" data-placeholder="Choose One" class="width300 select2-offscreen tingkatinstitusi" tabindex="-1" title="" style="width: 100%">
                                                <option namaarea="SMP" value="SEKOLAH">SMP/SMA/SMK</option>
                                                <option namaarea="UNIV" value="UNIV">MAHASISWA</option>
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
                                                <option namaarea="DIREKSI SMG" value="KANTOR DIREKSI SMG">KANTOR DIREKSI SEMARANG</option>
												<option namaarea="DIREKSI SOLO" value="KANTOR DIREKSI SOLO">KANTOR DIREKSI SOLO</option>
                                                <option namaarea="KRUMPUT" value="KEBUN KRUMPUT">KEBUN KRUMPUT</option>
	                                            <option namaarea="KAWUNG" value="KEBUN KAWUNG">KEBUN KAWUNG</option>
                                                <option namaarea="WARNASARI" value="KEBUN WARNASARI">KEBUN WARNASARI</option>
												<option namaarea="KALIGUA" value="KEBUN KALIGUA">KEBUN KALIGUA</option>
                                                <option namaarea="SILUWOK" value="KEBUN SILUWOK">KEBUN SILUWOK</option>
	                                            <option namaarea="BLIMBING" value="KEBUN BLIMBING">KEBUN BLIMBING</option>
                                                <option namaarea="JOLOTIGO" value="KEBUN JOLOTIGO">KEBUN JOLOTIGO</option>
												<option namaarea="SEMUGIH" value="KANTOR SEMUGIH">KANTOR SEMUGIH</option>
                                                <option namaarea="NGOBO" value="KEBUN NGOBO">KEBUN NGOBO</option>
	                                            <option namaarea="GETAS" value="KEBUN GETAS">KEBUN GETAS</option>
                                                <option namaarea="BATUJAMUS" value="KEBUN BATUJAMUS">KEBUN BATUJAMUS</option>
												<option namaarea="SUKAMANGLI" value="KANTOR SUKAMANGLI">KANTOR SUKAMANGLI</option>
                                                <option namaarea="JOLLONG" value="KEBUN JOLLONG">KEBUN JOLLONG</option>
	                                            <option namaarea="MERBUH" value="KEBUN MERBUH">KEBUN MERBUH</option>
                                                <option namaarea="BALONG" value="KEBUN BALONG">KEBUN BALONG</option>
												<option namaarea="UPH" value="UNIT PRODUK HILIR">UNIT PRODUK HILIR</option>
												<option namaarea="KAKOBA" value="KAMPOENG KOPI BANARAN">KAMPOENG KOPI BANARAN</option>
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

                                        <div class="form-group row">
                                            <label class="col-sm-4 control-label">Tanggal Berakhir Pelaksanaan</label>
                                            <div class="col-sm-8">
                                                <div class="input-group mb15">
                                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    <input type="text" placeholder="yyyy-mm-dd" class="form-control datepickerstart" id="datepickerstart" value="{{$daterightnow}}" readonly='readonly' required>
                                                </div><!-- input-group -->
                                            </div>
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
    <!-- End Fun Factor -->
@endsection