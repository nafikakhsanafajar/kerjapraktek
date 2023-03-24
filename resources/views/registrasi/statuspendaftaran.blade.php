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
                            <h3>STATUS PENDAFTARAN</h3>
                            <p>Periksa status pendaftaran anda dengan mengisi form dibawah ini:</p>
                        </div>
                        <!-- End Tab Info -->
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-4 control-label">Masukan Kode Registrasi</label>
	                                    <div class="col-sm-8">
                                            <div class="form-outline">
                                                <input type="search" id="searchdata" class="form-control" placeholder="Kode Registrasi"/>
                                            </div>
                                            
	                                
	                                    </div>
	                                    
	                                </div>
                                    <div class="panel-body button-action">
                                        <button class="btn btn-primary btn-rounded addplanner" ><i class="fas fa-search"></i> Search</button>
                                    </div>
                                    <div class="panel-body" id="errorMessage"> </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                <!-- Start Sidebar -->

                <!-- End Sidebar -->
            </div>
        </div>
        @if($totaldata>0)
        <div class="container mt-3">
          
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tingkat Institusi</th>
                        <th>Nama Institusi</th>
                        <th>Lokasi</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Berakhir</th>
                        <th>Total Biaya</th>
                        <th>Nama</th>
                        <th>NIM/NIS</th>
                        <th>Email</th>
                        <th>No Telp / HP</th>
                        <th>Perihal Kerja Praktek</th>
                        <th>File Surat Institusi</th>
                        <th>File Kerja Praktek/CV</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $i = 1;
                        // dd($datausers);
                        foreach ($datausers as $key ) {
                            
                    ?>
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$key->tingkat_institusi}}</td>
                            <td>{{$key->nama_institusi}}</td>
                            <td>{{$key->id_lokasi}}</td>
                            <td>{{$key->tgl_pelaksanaan}}</td>
                            <td>{{$key->tgl_pelaksanaan}}</td>
                            <td>{{$key->tot_biaya}}</td>
                            <td>{{$key->nama}}</td>
                            <td>{{$key->nim}}</td>
                            <td>{{$key->email}}</td>
                            <td>{{$key->hp}}</td>
                            <td>{{$key->judul}}</td>
                            <td>{{$key->surat_ins}}</td>
                            <td>{{$key->nama_file}}</td>
                            <td>{{$key->status}}</td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        @else
        <div class="container mt-3">Maaf Kode register <strong>{{$koderegister}}</strong>, Tidak terdaftar dalam Database kami.</div>
        @endif
    </div>
@endsection
    @section('jsbottom')
    <!-- End Fun Factor -->
    <script type="text/javascript">

	
            $(".container").on('click', '.btn-primary.addplanner', function(event) {
                    event.preventDefault();
                    // $(".btn-primary").removeClass('addplanner');
                    
                    var koderegistrasi = $('#searchdata').val();
                    

                    if (koderegistrasi!="")
                        {
                            $("#errorMessage").html("");
                            $("#errorMessage").html("<span class='logo'><i class='fa fa-spinner'></i></span> <span class='data'> Running Process</span>");
                            $("#errorMessage").fadeIn(800);
                            window.scrollTo(0, 100);

                            setTimeout( function() 
                            {
                                window.location.href = '{{url("registrasi/statuspendaftaran?kode_register=")}}'+koderegistrasi;
                            }, 2000);
                        
                    }
                    else{
                        $("#errorMessage").html("");
                        $("#errorMessage").html("<span class='logo'><i class='fa fa-ban'></i></span><span class='data'> Kode registrasi wajib diisi.</span>");
                        $("#errorMessage").fadeIn(800).fadeOut(3000);
                        window.scrollTo(0, 100);
                        
                    }

                });
    </script>
@endsection