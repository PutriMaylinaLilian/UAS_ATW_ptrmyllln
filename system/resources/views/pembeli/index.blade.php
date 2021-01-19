@extends('template.pembeli')

@section('content')
	
	@include('section.index')
	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{url('public/pembeli')}}/images/pembeli1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title" style="color: white">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{url('public/pembeli')}}/images/bakery4.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title"style="color: white">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url({{url('public/pembeli')}}/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">The Premium System Education</div>
									<div class="home_slider_subtitle">Future Of Education Technology</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	
	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="{{url('public/pembeli')}}/images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Produk Putree'sBakery</h2>
						<div class="section_subtitle"></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				@foreach($produk as $produk)
				<div class="col-lg-4 course_col"><br>
					<div class="course">
						<div class="course_image"><img src="{{url('app/produk', $produk->gambar)}}" style="width: 400px; height: 250px; border-radius: 10px;"></div>
						<div class="course_body">
							<h3 class="course_title"><a href="course.html">{{$produk->nama_produk}}</a></h3>
							<div class="course_teacher">{{$produk->penjual->nama_toko}}</div>
							<div class="course_text">
								<p>{{$produk->penjual->alamat}}</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<span aria-hidden="true"> Ukuran :</span>
									<span>{{$produk->ukuran}}</span>
								</div>
								<div class="course_info">
									<span aria-hidden="true"> Stok :</span> 
									<span>{{$produk->stok}}</span>
								</div>
								<div class="course_price ml-auto">Rp. {{number_format($produk->harga,0,',','.')}}</div>
							</div>
						</div>
						<form action="{{url('storekeranjang')}}" method="post">
							@csrf
							<input type="text" hidden="" name="id_produk" value="{{$produk->id_produk}}">
							<input type="text" hidden="" name="no_hp_penjual" value="{{$produk->no_hp_penjual}}">
							<input type="text" hidden="" name="username_penjual" value="{{$produk->username_penjual}}">

							<input type="text" hidden="" name="harga" value="{{$produk->harga}}">
							<input type="text" hidden="" name="ukuran" value="{{$produk->ukuran}}">

							@foreach($list_pembeli as $pembeli)
							@if((Auth::user()->username) == $pembeli->username)
							<input type="text" hidden="" name="username_pembeli" value="{{$pembeli->username}}">
							<input type="text" hidden="" name="no_hp_pembeli" value="{{$pembeli->no_hp_pembeli}}">
							@endif
							@endforeach
							<div class="row">
								<div class="col">
									<div class="text-center">
										<button class="btn btn-primary"><span class="fa fa-shopping-cart"></span> Tambah Keranjang </button>
									</div>
								</div>
							</div><br><br>
						</form>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>

	<!-- Counter -->

	<div class="counter">
		<div class="counter_background" style="background-image:url({{url('public/pembeli')}}/images/counter_background.jpg)"></div>
		
	</div>

	


	<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="{{url('public/pembeli')}}/images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection