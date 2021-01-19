@extends('template.penjual')

@section('content')

	<div class="container-fluid">
		<div class="row">
            <div class="col-12">
                <div class="card-box">

                	<div class="row">
                        <div class="col-sm-12 col-xs-12 col-md-6">
                            <h4 class="header-title m-t-0">Gambar</h4>
                            <img src="{{url('app/produk',$produk->gambar)}}" style="width: 400px; height: 400px; border-radius: 10px;">
                        </div>
                        
                        <div class="col-sm-12 col-xs-12 col-md-6">
                        	<div class="col-md-3">
                            	<h4 class="header-title m-t-50">{{$produk->nama_produk}}</h4>
                            </div>
                            <br><br>
                            <div class="col-md-3">
                            	<h4 class="header-title m-t-0">{{$produk->ukuran}}</h4>
                            </div><br><br>
                            <div class="col-md-3">
                            	<h4 class="header-title m-t-0">Rp.{{number_format($produk->harga,0,',','.')}},00</h4>
                            </div><br><br>

                            <div class="col-md-3">
                            	<h4 class="header-title m-t-0">{{$produk->stok}} Barang</h4>
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection