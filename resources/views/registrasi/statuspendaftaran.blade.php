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
                                        <label class="col-sm-4 control-label">Masukan Nomor Pendaftaran</label>
	                                    <div class="col-sm-8">
                                            <div class="form-outline">
                                                <input type="search" id="searchdata" class="form-control" placeholder="Nomor Pendaftaran"/>
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Anna</td>
                    <td>Pitt</td>
                    <td>35</td>
                    <td>New York</td>
                    <td>USA</td>
                    <td>Female</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <!-- End Fun Factor -->
@endsection