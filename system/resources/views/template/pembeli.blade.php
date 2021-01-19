<!DOCTYPE html>
<html lang="en">
<head>
<title>Putree'sBakery</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="{{url('public/admin')}}/img/logo.jpg">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/styles/bootstrap4/bootstrap.min.css">
<link href="{{url('public/pembeli')}}/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="{{url('public/pembeli')}}/styles/responsive.css">

 <link href="{{url('public/penjual')}}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Multi Item Selection examples -->
        <link href="{{url('public/penjual')}}/assets/plugins/datatables/select.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head> 
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question"></div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>informatik.seroja@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="{{url('logout')}}">Logout</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Putree'sBakery</div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">Home</a></li>
									
								</ul>
								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="{{url('keranjang')}}"> ( @yield('keranjang') ) </a></div>
								
								<div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="{{url('keranjang/konfirmasi')}}"> ( @yield('konfir') ) Konfirmasi Barang </a></div>
								<div class="search_button"><i class="fa fa-search" aria-hidden="true"></i></div>

								<!-- Hamburger -->

								
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	@yield('content')
	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url({{url('public/pembeli')}}/images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-3 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<div class="footer_logo_text">Unic<span>at</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Lorem ipsum dolor sit ametium, consectetur adipiscing elit.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: Info.deercreative@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>40 Baria Sreet 133/2 New York City, United States</li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Contact Us</div>
									<div class="footer_links_container">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="contact.html">Contact</a></li>
											<li><a href="#">Features</a></li>
											<li><a href="courses.html">Courses</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Gallery</a></li>
											<li><a href="#">FAQs</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-3 footer_col clearfix">
					
								<!-- Footer links -->
								<div class="footer_section footer_mobile">
									<div class="footer_title">Mobile</div>
									<div class="footer_mobile_content">
										<div class="footer_image"><a href="#"><img src="images/mobile_1.png" alt=""></a></div>
										<div class="footer_image"><a href="#"><img src="images/mobile_2.png" alt=""></a></div>
									</div>
								</div>
								
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{url('public/pembeli')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{url('public/pembeli')}}/styles/bootstrap4/popper.js"></script>
<script src="{{url('public/pembeli')}}/styles/bootstrap4/bootstrap.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/greensock/TweenMax.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/greensock/TimelineMax.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/greensock/animation.gsap.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="{{url('public/pembeli')}}/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="{{url('public/pembeli')}}/plugins/easing/easing.js"></script>
<script src="{{url('public/pembeli')}}/plugins/parallax-js-master/parallax.min.js"></script>
<script src="{{url('public/pembeli')}}/js/custom.js"></script>

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