<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>@yield('title')</title>
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/colors/blue.css"') }}"  id="theme rel="stylesheet">
    <link href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/dist/css/dropify.min.css') }}">
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <link href="{{ asset('assets/plugins/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
    <style>
        body{
            /*height: 2000px;*/
        }
        .jq-icon-info{
            background-color: #fc4b6c !important;
            color: #fff !important;
            border-color: transparent !important;
        }
        .topbar{
            background: #1e88e5 !important;
        }
        .dropify-wrapper{
            text-align: center !important;
        }

        .topbar .navbar-light .navbar-nav .nav-item > a.nav-link
        {
            color: #fff !important;
        }

        .logo{
            color: white;
            margin-top: 15px;
            font-size: 30px;
        }

        .logo span{
            font-weight: bold;
            font-style: italic;
        }

    </style>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand nav-link" href="{{ url('/') }}">
                        <p class="logo"><span>LSP</span> 2018</p>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>
                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/sekolah/fasilitas') }}" class="nav-link">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sekolah/prestasi') }}" class="nav-link">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sekolah/guru') }}" class="nav-link">Guru</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sekolah/ekskul') }}" class="nav-link">Ekskul</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('sekolah/ppdb') }}" class="nav-link">PPDB</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        @include('component.alert')
    </div>
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Ubah Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{ url('/ubahPassword') }}" method="post" id="form-pas">
                    @csrf
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="tokens">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Password Lama</label>
                            <input type="password" class="form-control" name="pw_lama" id="oldpw">
                        </div>
                        <div class="form-group">
                            <label for="">Password Baru</label>
                            <input type="password" class="form-control" name="pw_baru" id="valpwbaru">
                        </div>
                        <div class="form-group">
                            <label for="">Konfirmasu Password Baru</label>
                            <input type="password" class="form-control" name="kon_pw_baru" id="valkonfirmasi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-info waves-effect">Simpan Perubahan</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <script src="{{ asset('assets/plugins/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('assets/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/styleswitcher/jQuery.style.switcher.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('assets/js/toastr.js') }}"></script>
</body>

</html>