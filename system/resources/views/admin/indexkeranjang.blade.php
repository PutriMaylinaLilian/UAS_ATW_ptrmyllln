@extends('template.admin')

@section('content')

<div class="ecommerce-widget">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header" style="text-align: center; font-size: 20px;">Data Keranjang</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead class="bg-light">                      
                        
                            <tr>
                            	<th class="text-center">Nama Penjual</th>
                            	<th class="text-center"> Alamat Penjual</th>
                            	<th class="text-center">Nama Pembeli</th>
                            	<th class="text-center">Alamat Pembeli</th>
                            	<th class="text-center">Nama Produk</th>
                                <th class="text-center">Ukuran Produk</th>
                                <th class="text-center">Harga Produk</th>
                                <th class="text-center">Stok Produk</th>
                                <th class="text-center">Jumlah yang di beli</th>
                                <th class="text-center">Total Pebayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($keranjang as $keranjang)
                        		<tr>
                        			<td style="text-align: center;">{{$keranjang->penjual->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$keranjang->penjual->alamat}}</td>
                        			<td style="text-align: center;">{{$keranjang->pembeli->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$keranjang->pembeli->alamat}}</td>
                        			<td style="text-align: center;">{{$keranjang->produk->nama_produk}}</td>
                                    <td style="text-align: center;">{{$keranjang->ukuran}}</td>
                                    <td style="text-align: center;">{{$keranjang->harga}}</td>
                                    <td style="text-align: center;">{{$keranjang->produk->stok}}</td>
                                    <td style="text-align: center;">{{$keranjang->jumlah}}</td>
                                    <td style="text-align: center;">{{$keranjang->total}}</td>
                                    </td>
                        		</tr>
                        	@endforeach
                        </tbody>
                    </table>
                      
                </div>
            </div>
        </div>
    </div>
</div>

@endsection