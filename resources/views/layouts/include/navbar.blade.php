<nav class="navbar navbar-default navbar-sticky bootsnav">

    <!-- Start Top Search -->
    <div class="container">
        <div class="row">
            <div class="top-search">
                <div class="input-group">
                    <form action="#">
                        <input type="text" name="text" class="form-control" placeholder="Search">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                        </button>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
    <div class="container">

        <!-- Start Atribute Navigation -->
        <div class="attr-nav">
            <!-- <ul>
                <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
            </ul> -->
        </div>        
        <!-- End Atribute Navigation -->

        <!-- Start Header Navigation -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="{{url('assets/exa_assets/img/logo9.png')}}" class="logo" alt="Logo">
            </a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                <li>
                    <a href="{{url('/')}}">Beranda</a>
                </li>
                 <li class="dropdown">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Registrasi</a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('registrasi/kerjapraktek')}}" target="" >KERJA PRAKTEK</a></li><!-- form.php?md=KP -->
                        <li><a href="{{url('registrasi/riset')}}" target="" >RISET & PENELITIAN</a></li><!-- form.php?md=RIS -->
                        <li><a href="{{url('registrasi/kunjungan')}}" target="" >KUNJUNGAN</a></li><!-- form.php?md=KUN -->
                    </ul>
                </li> 
                <li><a href="{{url('registrasi/statuspendaftaran')}}" target="_blank">Status Pendaftaran</a></li><!-- search.php -->
                

            </ul>
        </div><!-- /.navbar-collapse -->
    </div>

</nav>