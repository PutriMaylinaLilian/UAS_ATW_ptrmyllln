@extends('template.pembeli')

@section('content')
	@include('section.index')
	
		<div class="container-fluid" style="margin-top: 250px;">
        <div class="row">
			<div class="col-xl-12">
				<div class="box">
					<div class="card">
						<br>
						<div class="card-body">
							<table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Aksi</th>
                                        <th>Nama Toko</th>
                                    	<th>Nama Produk</th>
                                    	<th>Ukuran</th>
                                    	<th>Harga</th>
                                    	<th>Stok</th>
                                    	<th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($keranjang as $keranjang)
                                	@if((Auth::user()->username) == $keranjang->username_pembeli)
                                    @if($keranjang->status == 1)
                                	<tr>
                                		<td>
                                			<a href="{{url('keranjang/delete',$keranjang->id_keranjang)}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Hapus Keranjang</a>
                                			<a href="{{url('keranjang/edit', $keranjang->id_keranjang)}}" class="btn btn-warning"> <span class="fa fa-pencil"></span> Checkout</a>

                                		</td>
                                		<td>{{$keranjang->penjual->nama_toko}}</td>
                                        <td>{{$keranjang->produk->nama_produk}}</td>
                                		<td>{{$keranjang->ukuran}}</td>
                                		<td>Rp. {{number_format($keranjang->harga,0,',','.')}},00</td>
                                		  <td> {{$keranjang->produk->stok}} </td>
                                		<td>
                                			<img src="{{url('app/produk', $keranjang->produk->gambar)}}" style="width: 150px; height: 150px; border-radius: 10px;">
                                		</td>
                                	</tr>
                                    @endif

                                     @if($keranjang->status == 2)
                                    <tr>
                                        <td>
                                            
                                            <a href="{{url('keranjang/upload', $keranjang->id_keranjang)}}" class="btn btn-warning"> <span class="fa fa-upload"></span> Upload Bukti Transfer</a>

                                        </td>
                                        <td>{{$keranjang->penjual->nama_toko}}</td>
                                        <td>{{$keranjang->produk->nama_produk}}</td>
                                        <td>{{$keranjang->ukuran}}</td>
                                        <td>Rp. {{number_format($keranjang->harga,0,',','.')}},00</td>
                                        <td> {{$keranjang->produk->stok}} </td>
                                        <td>
                                            <img src="{{url('app/produk', $keranjang->produk->gambar)}}" style="width: 150px; height: 150px; border-radius: 10px;">
                                        </td>
                                    </tr>
                                    @endif
                                	@endif
                                	@endforeach
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <br><br><br><br><br><br><br><br><br>
@endsection