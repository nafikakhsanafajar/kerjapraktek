@extends('layouts.appkp')
@section('content')
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
                                            <select name="tingkatinstitusi" data-placeholder="Tingkat Institusi" class="width300 select2-offscreen tingkatinstitusi" tabindex="-1" title="" style="width: 100%">
												<option value="">-Pilih-</option>
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
                                            <select name="lokasi" data-placeholder="Lokasi Pelaksanaan" class="width300 select2-offscreen lokasi" tabindex="-1" title="" style="width: 100%">
												<option value="">-Pilih-</option>
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
                                        <label class="col-sm-4 control-label">Tanggal Mulai Pelaksanaan</label>
	                                    <div class="col-sm-8">
	                                        <div class="input-group mb15">
	                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                                            <input type="text" placeholder="yyyy-mm-dd" class="form-control datepickerstart" id="datepickerstart" value="{{$daterightnow}}" readonly='readonly' required>
	                                        </div><!-- input-group -->
	                                    </div>
                                    </div>

									<div class="form-group row">
                                        <label class="col-sm-4 control-label">Tanggal Berakhir Pelaksanaan</label>
	                                    <div class="col-sm-8">
	                                        <div class="input-group mb15">
	                                            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
	                                            <input type="text" placeholder="yyyy-mm-dd" class="form-control datepickerend" id="datepickerend" value="{{$daterightnow}}" readonly='readonly' required>
	                                        </div><!-- input-group -->
	                                    </div>
                                    </div>
									<div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">Total Biaya </label>
	                                    <div class="col-sm-8">
	                                        <input type="text" placeholder="0" step="any" name="totalbiaya" value="" id="totalbiaya" class="form-control totalbiaya"  readonly>
	                                    </div>
	                                    
	                                </div>

                                </div>
                                <div class="col-md-6">
                                    
                                    
                                    
                                    <div class="form-group opsidateclass row">
	                                    <input type="hidden" name="tipe" value="KP" id="tipe" class="form-control tipe" readonly="readonly" required>
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
	                                        <input type="file" step="any" name="judulsi" value="" id="judulsi" class="form-control judulsi"  required>
	                                    </div>
	                                </div>
                                    <div class="form-group row">
	                                    <label class="col-sm-4 control-label" for="readonlyinput">File Kerja Praktek / CV</label>
	                                    <div class="col-sm-8">
	                                        <input type="file" step="any" name="judulfile" value="" id="judulfile" class="form-control judulfile"  required>
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
	        var startdateText = $('.datepickerstart').val();
			var enddateText = $('.datepickerend').val();
			var tingkatinstitusi = $(".tingkatinstitusi").val();
			hitung(tingkatinstitusi, startdateText, enddateText);
	    });
		$('.datepickerend').datepicker({
	        
	        autoclose: true,
	        startDate: new Date(2021, 10, 1),
	        format: "yyyy-mm-dd"
	    }).on('changeDate', function(e) {
			var startdateText = $('.datepickerstart').val();
	        var enddateText = $('.datepickerend').val();
			var tingkatinstitusi = $(".tingkatinstitusi").val();
			hitung(tingkatinstitusi, startdateText, enddateText);
	    });

		$(".tingkatinstitusi").on('change', function() {
			var tingkatinstitusi = $(this).val();
			var startdateText = $('.datepickerstart').val();
			var enddateText = $('.datepickerend').val();
			hitung(tingkatinstitusi, startdateText, enddateText);
			
		});

		function hitung(tingkatinstitusi, startdateText, enddateText) {
			// console.log(tingkatinstitusi);
			var dt1 = new Date(startdateText);
      		var dt2 = new Date(enddateText);
			var totalDays = Math.ceil((dt2.getTime()-dt1.getTime())/(1000*60*60*24));
			var biaya = 50000;

			if(tingkatinstitusi=='UNIV'){
				biaya = 150000;
			}
			if(tingkatinstitusi=='UMUM'){
				biaya = 200000;
			}
			$('.totalbiaya').val(Math.ceil((totalDays+1)/30)*biaya);
		}

		$(".container").on('click', '.btn-primary.addplanner', function(event) {
			event.preventDefault();
			$(".btn-primary").removeClass('addplanner');
			
			var tingkatinstitusi = $('.tingkatinstitusi').val();
			var namainstitusi = $('.namainstitusi').val();
			var lokasi = $('.lokasi').val();
			var startdateText = $('.datepickerstart').val();
			var enddateText = $('.datepickerend').val();
			var totalbiaya = $('.totalbiaya').val();

			var tipe = $('.tipe').val();
			var nim = $('.nim').val();
			var email = $('.email').val();
			var notelp = $('.notelp').val();
			var judul = $('.judul').val();

			var judulsi = $('.judulsi').val();
			var judulfile = $('.judulfile').val();
			console.log(lokasi);
			
			
			// var koderegistrasi = $('#searchdata').val();
			
			if (tingkatinstitusi!="" )
			// if (tingkatinstitusi!="" && namainstitusi!="" && lokasi!="" && startdateText!="" 
			// && enddateText!="" && totalbiaya!="" && tipe!="" && nim!="" && notelp!="" && judul!="" )
				{
					$("#errorMessage").html("");
					$("#errorMessage").html("<span class='logo'><i class='fa fa-spinner'></i></span> <span class='data'> Running Process</span>");
					$("#errorMessage").fadeIn(800);
					window.scrollTo(0, 100);
					ajaxAddPlanner();
				
			}
			else{
				$("#errorMessage").html("");
				$("#errorMessage").html("<span class='logo'><i class='fa fa-ban'></i></span><span class='data'> Pastikan semua isian terisi wajib diisi.</span>");
				$("#errorMessage").fadeIn(800).fadeOut(3000);
				window.scrollTo(0, 100);
				
			}



		});

		function ajaxAddPlanner(){
			var tingkatinstitusi = $('.tingkatinstitusi').val();
			var namainstitusi = $('.namainstitusi').val();
			var lokasi = $('.lokasi').val();
			var startdateText = $('.datepickerstart').val();
			var enddateText = $('.datepickerend').val();
			var totalbiaya = $('.totalbiaya').val();

			
			var tipe = $('.tipe').val();
			var nim = $('.nim').val();
			var email = $('.email').val();
			var notelp = $('.notelp').val();
			var judul = $('.judul').val();

			var judulsi = $('.judulsi').val();
			var judulfile = $('.judulfile').val();

			
				var formData = new FormData();
					formData.append('tipe', tipe);
					formData.append('namainstitusi', namainstitusi);
					formData.append('tingkatinstitusi', tingkatinstitusi);
					formData.append('lokasi', lokasi);
					formData.append('startdateText', startdateText);
					formData.append('enddateText', enddateText);

					formData.append('totalbiaya', totalbiaya);
					formData.append('nim', nim);
					formData.append('email', email);
					formData.append('notelp', notelp);
					formData.append('judul', judul);
					// formData.append('latekspekat', latekspekat);

				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				jQuery.ajax({
					url: "{{url('/')}}/registrasi/func_insertkerjapraktek",
					type: 'POST',
					cache: false, 
					processData: false,
					contentType: false,
					data: formData,
					success: function (result) {
						console.log(result);
						// $("#errorMessages").html("<span class='logo'><i class='fa fa-check-circle-o'></i></span><br><br><span class='data'> "+result+"</span>");
						// $("#errorMessages").fadeIn(500);
						// window.scrollTo(0, 100);
						// $(".button_action .btn-primary").addClass('addplanner');

						// setTimeout(function(){ location.reload(); }, 1000);

					}
					
				});
				console.log('berhasil');


		};
        
    </script>
@endsection