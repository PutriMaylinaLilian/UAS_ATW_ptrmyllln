@extends('template.admin')

@section('content')

<div class="ecommerce-widget">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header" style="text-align: center; font-size: 20px;">Data Produk</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead class="bg-light">                      
                            <tr>
                            	<th class="text-center">Nama Produk</th>
                            	<th class="text-center">Nama Toko</th>
                            	<th class="text-center">Ukuran</th>
                            	<th class="text-center">Harga</th>
                            	<th class="text-center">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($produk as $produk)
                        		<tr>
                        			<td style="text-align: center;">{{$produk->nama_produk}}</td>
                        			<td style="text-align: center;">{{$produk->penjual->nama_toko}}</td>
                        			<td style="text-align: center;">{{$produk->ukuran}}</td>
                        			<td style="text-align: center;">Rp. {{number_format($produk->harga,0,',','.')}},00</td>
                        			<td style="text-align: center;">{{$produk->stok}}</td>
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