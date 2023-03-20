@extends('layouts.appkp')
@section('content')
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area content-top-heading less-paragraph text-normal">
        <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-light carousel-zoom">
                
                <div class="item active">
                    <div class="slider-thumb bg-fixed" style="background-image:url(assets/exa_assets/img/banner/ptpnix.jpeg)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">KERJA PRAKTEK</h1>
                                            <h3 data-animation="animated slideInUp">DI PT PERKEBUNAN NUSANTARA IX</h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{url('registrasi/kerjapraktek')}}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image:url(assets/exa_assets/img/banner/2.jpeg)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">RISET PENELITIAN</h1>
                                            <h3 data-animation="animated slideInUp"> DI PT PERKEBUNAN NUSANTARA IX</h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="{{url('registrasi/riset')}}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="slider-thumb bg-fixed" style="background-image:url(assets/exa_assets/img/banner/kunjungan.jpg)"></div>
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="content">
                                            <h1 data-animation="animated slideInLeft">KUNJUNGAN</h1>
                                            <h3 data-animation="animated slideInUp">PT PERKEBUNAN NUSANTARA IX</h3>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#{{url('registrasi/kunjungan')}}">DAFTAR</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->

    <!-- Start About 
    ============================================= -->
    <!-- Start Fun Factor 
    ============================================= -->
     <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                           <h3>PERSYARATAN PENDAFTARAN KERJA PRAKTEK, RISET / PENELITIAN DAN KUNJUNGAN</h3>
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                 <li class="active">
                                    <a data-toggle="tab" href="#tab0" aria-expanded="true">
                                        PENGUMUMAN
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                        KERJA PRAKTEK
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        RISET PENELITIAN
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        KUNJUNGAN
                                    </a>
                                </li>
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <div id="tab0" class="tab-pane fade active in">
                                    <div class="info title">
                                        <div class="well">
                                            <div class="navbar navbar-inverse">
                                                <div class="navbar-collapse">
                                                    <div class="container"> <a class="brand" style="color: white;" href="#">PENGUMUMAN KEBIJAKAN PKL,MAGANG,RISET,KUNJUNGAN,PENELITIAN DI PTPN IX <br> TERKAIT PANDEMI COVID-19 </a></div>
                                                </div>
                                            </div>
                                           <iframe src="assets/exa_assets/pdf/kebijakan.pdf" width="100%" height="480"></iframe>
                                        </div>

                                    </div>
                                </div>
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade">
                                    <div class="info title">
                                        <h4>A. SISWA SMP / SMA / SEDERAJAT</h4>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan Kerja Praktek</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat dari sekolah kepada Manager kebun / Unit Usaha.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kerja Praktek Untuk Siswa SMP / SMA / SEDERAJAT yaitu Rp 50.000 / orang / bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan sepenuhnya diserahkan kepada Pimpinan unit kerja / manager kebun terkait.</li>
                                        </ul>
                                        <p>
                                        <h4>B. MAHASISWA</h4>
                                        </p>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan Kerja Praktek</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat beserta proposal kerja praktek dari Universitas / Lembaga Pendidikan dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kerja Praktek Untuk Mahasiswa yaitu Rp 150.000 /orang/unit kerja/bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Kerja Praktek Mahasiwa harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                         <p>
                                        <h4>C. UMUM</h4>
                                        </p>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan Kerja Praktek</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat beserta proposal kerja praktek dari Instansi / Lembaga lain dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kerja Praktek Untuk Umum yaitu Rp 200.000 / orang / unit kerja / bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Kerja Praktek Mahasiwa harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab2" class="tab-pane fade">
                                         <div class="info title">
                                        <h4>A. SISWA SMP / SMA / SEDERAJAT</h4>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan riset/ penelitian.</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat beserta proposal riset / penelitian dari sekolah kepada Manager kebun / Unit Usaha.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kerja Riset / Penelitian Untuk Siswa SMP / SMA /SEDERAJAT yaitu Rp 50.000 / orang / bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan sepenuhnya diserahkan kepada Pimpinan unit kerja / manager kebun terkait.</li>
                                        </ul>
                                        <p>
                                        <h4>B. MAHASISWA</h4>
                                        </p>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan riset/ penelitian.</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat beserta proposal riset / penelitian dari Universitas / Lembaga Pendidikan dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Riset / Penelitian Untuk Mahasiswa yaitu Rp 150.000 /orang / unit kerja / bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Riset / Penelitian Mahasiwa harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                         <p>
                                        <h4>C. UMUM</h4>
                                        </p>
                                        <ul>
                                             <li><i class="fas fa-check-double"></i> Waktu pendaftaran maksimal satu bulan sebelum tanggal pelaksanaan riset/ penelitian.</li>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan Surat Beserta Proposal Riset / Penelitian dari Instansi / Lembaga lain dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Riset / Penelitian Untuk Umum yaitu Rp 200.000 /orang/unit kerja/bulan.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya bimbingan tidak termasuk akomodasi penginapan dan transportasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Riset / Penelitian  Umum harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab3" class="tab-pane fade">
                              <div class="info title">
                                        <h4>A. SISWA SMP / SMA / SEDERAJAT</h4>
                                        <ul>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat dari sekolah kepada Manager kebun / Unit Usaha.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kerja Kunjungan Untuk Siswa SMP / SMA /SEDERAJAT yaitu Rp 15.000 / orang.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya Pendampingan tidak termasuk akomodasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan sepenuhnya diserahkan kepada Pimpinan unit kerja / manager kebun terkait.</li>
                                        </ul>
                                        <p>
                                        <h4>B. MAHASISWA</h4>
                                        </p>
                                        <ul>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan surat dari Universitas / Lembaga Pendidikan dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kunjungan Untuk Mahasiswa yaitu Rp 25.000 /orang / unit kerja.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya Pendampingan tidak termasuk akomodasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Riset / Penelitian Mahasiwa harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                         <p>
                                        <h4>C. UMUM</h4>
                                        </p>
                                        <ul>
                                            <li><i class="fas fa-check-double"></i> Mengirimkan Surat dari Instansi / Lembaga lain dan ditujukan kepada Direktur Komersil PT Perkebunan Nusantara IX.</li>
                                            <li><i class="fas fa-check-double"></i> Tarif Kunjungan Untuk Umum yaitu Rp 50.000 /orang (Wisatawan Domestik) dan Rp. 100.000 / orang (wisatawan Mancanegara).</li>
                                            <li><i class="fas fa-check-double"></i> Tarif hanya untuk biaya Pendampingan tidak termasuk akomodasi peserta.</li>
                                            <li><i class="fas fa-check-double"></i> Data yang diperoleh hanya untuk keperluan akademis dan tidak dibenarkan di sebarluasakan secara umum.</li>
                                            <li><i class="fas fa-check-double"></i> Perijinan Kunjungan Ilmiah untuk Umum harus Melalui Direksi PT PERKEBUNAN NUSANTARA IX .</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Single Tab -->

                                <!-- Single Tab -->
                                <div id="tab4" class="tab-pane fade">
                                    <div class="info title">
                                        <div class="course-rating-list">
                                            <h4>Average Rating</h4>
                                            <div class="item rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (16)</span>
                                            </div>
                                            <ul>
                                                <li>
                                                    <span>5 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>13</span>
                                                </li>
                                                <li>
                                                    <span>4 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <span>3 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>0</span>
                                                </li>
                                                <li>
                                                    <span>2 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>1</span>
                                                </li>
                                                <li>
                                                    <span>1 Star</span>
                                                    <div class="rating-bar"></div>
                                                    <span>0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="accordion" id="accordion">
                                <div class="card card-default">
                                    <div class="card-header">
                                        <h4 class="card-title m-0">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                <i class="fas fa-laptop"></i>
                                                Statistik Pengunjung
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show">
                                        <div class="card-body">
                                            <p>Pengunjung Hari Ini <strong data-to="120" data-plugin-counter data-plugin-options="{'speed': 3500}">0</strong></p>

                                            <p>Pengujung Aktif <strong class="alternative-font" data-to="450" data-plugin-counter data-plugin-options="{'speed': 3500}">0</strong></p>

                                            <p>Total Keseluruhan <strong class="alternative-font" data-to="1500000" data-plugin-counter data-plugin-options="{'speed': 3500}">525</strong></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->
@endsection