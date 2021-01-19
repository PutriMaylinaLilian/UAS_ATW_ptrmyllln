@extends('template.penjual')

@section('content')
	
	<div class="container-fluid">
        <div class="row">
			<div class="col-xl-12">
				<div class="box">
					<div class="card">
						<div>
							<a href="#custom-modal" class="btn btn-primary waves-effect waves-light m-r-5 m-b-10" data-animation="contentscale" data-plugin="custommodal" data-overlaySpeed="100" data-overlayColor="#36404a"><i class="fa fa-plus"></i>Tambah Produk</a>
						</div><br>
						<div class="card-body">
							<table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Aksi</th>
                                    	<th>Nama Produk</th>
                                    	<th>Ukuran</th>
                                    	<th>Harga</th>
                                    	<th>Stok</th>
                                    	<th>Gambar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($list_produk as $produk)
                                	@if((Auth::user()->username) == $produk->username_penjual)
                                	<tr>
                                		<td>
                                			<a href="{{url('produk/delete',$produk->id_produk)}}" class="btn btn-danger"> <span class="fa fa-trash"></span> Hapus</a>
                                			<a href="{{url('produk/edit', $produk->id_produk)}}" class="btn btn-warning"> <span class="fa fa-pencil"></span> Edit</a>

                                			<a href="{{url('produk', $produk->id_produk)}}" class="btn btn-info"> <span class="fa fa-check"></span> Lihat</a>
                                		</td>
                                		<td>{{$produk->nama_produk}}</td>
                                		<td>{{$produk->ukuran}}</td>
                                		<td>Rp. {{number_format($produk->harga,0,',','.')}},00</td>
                                		<td> {{$produk->stok}} Produk</td>
                                		<td>
                                			<img src="{{url('app/produk', $produk->gambar)}}" style="width: 150px; height: 150px; border-radius: 10px;">
                                		</td>
                                	</tr>
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

	<div id="custom-modal" class="modal-demo" >
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Tambah Produk</h4>
        <div class="custom-modal-text" style="width: 800px;">
        	<form action="{{url('produk/store')}}" method="post" enctype="multipart/form-data">
			@csrf
				
				@foreach($penjual as $penjual)
					@if((Auth::user()->username) == $penjual->username)
						<input type="text" name="no_hp_penjual" value="{{$penjual->no_hp}}" hidden="">
						<input type="text" name="username_penjual" value="{{$penjual->username}}" hidden="">
					@endif
				@endforeach
	        	<div class="form-group row">
	                <label for="example-text-input" class="col-2 col-form-label">Nama Produk</label>
	            	
	            	<div class="col-10">
	                 	<input class="form-control" type="text" placeholder="Masukan Nama Produk" name="nama_produk">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="example-text-input" class="col-2 col-form-label">Ukuran Produk</label>
	            	
	            	<div class="col-10">
	                 	<input class="form-control" type="text" placeholder="Masukan Ukuran Produk" name="ukuran">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="example-text-input" class="col-2 col-form-label">Harga Produk</label>
	            	
	            	<div class="col-10">
	                 	<input class="form-control" type="text" placeholder="Masukan Harga Produk" name="harga">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="example-text-input" class="col-2 col-form-label">Stok Produk</label>
	            	
	            	<div class="col-10">
	                 	<input class="form-control" type="text" placeholder="Masukan Stok Produk" name="stok">
	                </div>
	            </div>

	            <div class="form-group row">
	                <label for="example-text-input" class="col-2 col-form-label">Gambar Produk</label>
	            	
	            	<div class="col-10">
	                 	<input class="form-control" type="file" name="gambar" accept=".jpg, .png, .jpeg">
	                </div>
	            </div>
	       		
	       		<div class="form-group row">
	       			<div class="col-2"></div>
	               <div class="col-2">
	               	<button type="reset" class="btn btn-info" onclick="Custombox.close();"><span class="fa fa-times"></span> Batal</button>
	               </div>
	            	
	            	<div class="col-8">
	                 	<button class="btn btn-primary"><span class="fa fa-save"></span>Simpan</button>
	                </div>
	            </div>
        	</form>
        </div>
    </div>

@endsection