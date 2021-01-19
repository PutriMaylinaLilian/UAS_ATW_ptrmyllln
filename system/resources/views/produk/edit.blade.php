@extends('template.penjual')

@section('content')

	<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-30 text-center">Edit Produk</h4>
                    <form action="{{url('produk/update', $produk->id_produk)}}" method="post" enctype="multipart/form-data">
						@csrf
						@method('PUT')
	                    <div class="form-group row">
	                    	<label for="example-text-input" class="col-2 col-form-label">Nama Produk</label>
	                        <div class="col-10">
	                            <input class="form-control" type="text" name="nama_produk" value="{{$produk->nama_produk}}" >
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                    	<label for="example-text-input" class="col-2 col-form-label">Ukuran Produk</label>
	                        <div class="col-10">
	                            <input class="form-control" type="text" name="ukuran" value="{{$produk->ukuran}}" >
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                    	<label for="example-text-input" class="col-2 col-form-label">Nama Harga</label>
	                        <div class="col-10">
	                            <input class="form-control" type="text" name="harga" value="{{$produk->harga}}" >
	                        </div>
	                    </div>


	                    <div class="form-group row">
	                    	<label for="example-text-input" class="col-2 col-form-label">Stok Produk</label>
	                        <div class="col-10">
	                            <input class="form-control" type="text" name="stok" value="{{$produk->stok}}" >
	                        </div>
	                    </div>

	                    <div class="form-group row">
	                    	<label for="example-text-input" class="col-2 col-form-label">Gambar Produk</label>
	                    	<div class="col-4">
	                    		<img src="{{url('app/produk', $produk->gambar)}}" style="width: 150px; height: 150px; border-radius: 10px;">
	                    	</div>
	                        <div class="col-6">
	                            <input class="form-control" type="file" name="gambar" value="{{$produk->gambar}}" accept=".jpg, .png, .jpeg">
	                        </div>
	                    </div><br>
	                    <div class="form-group row">
			       			<div class="col-2"></div>
			               <div class="col-2">
			               	<button type="reset" class="btn btn-info" onclick="Custombox.close();"><span class="fa fa-times"></span> Batal</button>
			               </div>
			            	
			            	<div class="col-8">
			                 	<button class="btn btn-primary float-right"><span class="fa fa-save"></span>Simpan</button>
			                </div>
			            </div>
	                </form>
                </div>
            </div>
        </div>
	</div>
@endsection