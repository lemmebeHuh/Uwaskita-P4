<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Uwaskita Academy - {{Auth::user()->name}}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('asset')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('asset')}}/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">WASKITA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{asset('asset')}}/#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Waskita Academy</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Components:</h6>
                @if(Auth::user()->role == 'operator')
                <a class="collapse-item" href="{{route('dosens.index')}}">Dosen</a>
                <a class="collapse-item" href="{{route('mahasiswas.index')}}">Mahasiswa</a>
                <a class="collapse-item" href="{{route('mata_kuliahs.index')}}">Mata Kuliah</a>
                <a class="collapse-item" href="{{route('tahun_akademiks.index')}}">Tahun Akademik</a>
                <a class="collapse-item" href="{{route('nilais.index')}}">Penilaian</a>
                @endif

                @if(Auth::user()->role == 'mahasiswa')
                <a class="collapse-item" href="{{route('nilais.index')}}">Hasil Nilai</a>
                @endif

                @if(Auth::user()->role == 'dosen')
                <!-- <a class="collapse-item" href="{{route('dosens.index')}}">Dosen</a> -->
                <a class="collapse-item" href="{{route('mahasiswas.index')}}">Mahasiswa</a>
                <a class="collapse-item" href="{{route('mata_kuliahs.index')}}">Mata Kuliah</a>
                <a class="collapse-item" href="{{route('nilais.index')}}">Penilaian</a>
                @endif

            </div>
        </div>
    </li>
    
       

    <!-- Nav Item - Utilities Collapse Menu -->
    

    <!-- Divider -->
    
    <!-- Heading -->
   

    <!-- Nav Item - Pages Collapse Menu -->
    

    <!-- Nav Item - Charts -->
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- @if (Auth::user())
    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
        @csrf
        <button class="btn btn-danger" type="submit" onclick= "window.location.href='{{route('login')}}'">Logout</button>
    </form>
    @else
    <a href="/login" class="btn btn-warning">login</a>
    @endif --}}
    
</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                        aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                

                <!-- Nav Item - Alerts -->
              

                <!-- Nav Item - Messages -->
                

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow " >
                    <a class="nav-link dropdown-toggle" href="{{asset('asset')}}/#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <h6>{{Auth::user()->name}}</h6>
                    @if(Auth::user()->role == 'operator')
        <img class="img-profile rounded-circle" src="{{asset('asset/img/')}}/{{Auth::user()->name}}"alt='iniFoto OP' >
        @elseif(Auth::user()->role == 'mahasiswa')
        <img class="img-profile rounded-circle" src="{{asset('asset/img/')}}/{{Auth::user()->photo}}" alt='iniFoto Mhs'>
        @else
        <img class="img-profile rounded-circle" src="{{asset('asset/img/')}}/{{Auth::user()->photo}}" alt='iniFoto Dsn' >
        @endif
                </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        
                        <a class="dropdown-item" href="/profile/{id}">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-600"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" type="submit" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                                    Logout
                                </a>
                        {{-- @if (Auth::user())
    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
        @csrf
        <button style="border: none; background-color: white;" type="submit" onclick= "window.location.href='{{route('login')}}'">
        <a class="dropdown-item">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-600"></i>
                            Logout
                        </a>
    </button>
    </form> --}}
    {{-- @else
    <a href="/login" class="btn btn-warning">login</a>
    @endif --}}
    {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            >Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                            </form> --}}
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <section class="content">
            <div class="container-fluid">
                @yield('MainContent')
            </div>
        </section>
       
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Waskita Academy 2024</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('asset')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('asset')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('asset')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('asset')}}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{asset('asset')}}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('asset')}}/js/demo/chart-area-demo.js"></script>
    <script src="{{asset('asset')}}/js/demo/chart-pie-demo.js"></script>
</body>

</html>