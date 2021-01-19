<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('public/admin')}}/img/logo.jpg">

        <!-- App title -->
        <title>Putree'sBakery</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{url('public/penjual')}}/assets/plugins/morris/morris.css">

        <!-- Switchery css -->
        <link href="{{url('public/penjual')}}/assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{url('public/penjual')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{url('public/penjual')}}/assets/css/style.css" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{url('public/penjual')}}/assets/js/modernizr.min.js"></script>

        <link href="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="{{url('public/penjual')}}/assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">

        <link href="{{url('public/penjual')}}/assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="{{url('public/penjual')}}/assets/plugins/mjolnic-bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="{{url('public/penjual')}}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="{{url('public/penjual')}}/assets/plugins/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="{{url('public/penjual')}}/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <i class="zmdi zmdi-home icon-c-logo"></i>
                        <span>{{Auth::user()->username}}</span></a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                       

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{url('public/penjual')}}/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                               

                                <!-- item-->
                                <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="text-muted menu-title"></li>

                            <li class="has_sub">
                                <a href="{{url('penjual')}}" class="waves-effect"><span class="label label-pill label-primary float-right"></span><i class="zmdi zmdi-view-dashboard"></i><span> Home </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="{{url('produk')}}" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Data Produk </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Pesanan </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="{{url('pesanan')}}"><span class="zmdi zmdi-minus"></span> Pesanan Masuk</a></li>
                                    <li><a href="{{url('pesanan/terkirim')}}"><span class="zmdi zmdi-minus"></span> Pesanan Terkirim</a></li>
                                    <li><a href="{{url('pesanan/sampai')}}"><span class="zmdi zmdi-minus"></span> Pesanan Sampai</a></li>
                                    
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <!-- End content-page -->


            <footer class="footer text-right">
                Teknik Informatika @2021
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{url('public/penjual')}}/assets/js/jquery.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/popper.min.js"></script><!-- Tether for Bootstrap -->
        <script src="{{url('public/penjual')}}/assets/js/bootstrap.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/detect.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/fastclick.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/jquery.blockUI.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/waves.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/switchery/switchery.min.js"></script>

        <!--Morris Chart-->
		<script src="{{url('public/penjual')}}/assets/plugins/morris/morris.min.js"></script>
		<script src="{{url('public/penjual')}}/assets/plugins/raphael/raphael-min.js"></script>

        <!-- Counter Up  -->
        <script src="{{url('public/penjual')}}/assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- App js -->
        <script src="{{url('public/penjual')}}/assets/js/jquery.core.js"></script>
        <script src="{{url('public/penjual')}}/assets/js/jquery.app.js"></script>

        <!-- Page specific js -->
        <script src="{{url('public/penjual')}}/assets/pages/jquery.dashboard.js"></script>


         <!-- Required datatable js -->
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/jszip.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/buttons.print.min.js"></script>

        <!-- Key Tables -->
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.keyTable.min.js"></script>

        <!-- Responsive examples -->
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Selection table -->
        <script src="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.select.min.js"></script>

         <script src="{{url('public/penjual')}}/assets/plugins/custombox/js/custombox.min.js"></script>
        <script src="{{url('public/penjual')}}/assets/plugins/custombox/js/legacy.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

                // Default Datatable
                $('#datatable').DataTable();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf']
                });

                // Key Tables

                $('#key-table').DataTable({
                    keys: true
                });

                // Responsive Datatable
                $('#responsive-datatable').DataTable();

                // Multi Selection Datatable
                $('#selection-datatable').DataTable({
                    select: {
                        style: 'multi'
                    }
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            } );

        </script>
    </body>
</html>