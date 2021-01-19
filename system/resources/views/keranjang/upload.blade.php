@extends('template.pembeli')

@section('content')
@include('section.index')
	
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	

<div class="container-fluid" style="margin-top: 200px; width: 90%;">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="col-md-12 col-md-offset-2">
                   
                    <div class="shopping_cart" style="width:98%;">
                        <div class="form-horizontal" role="form" id="payment-form">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="text-center">
                                            <a class="text-center" data-toggle="collapse"> CheckOut</a>
                                        </h4><br>
                                    </div>
                                    
                                    <div  class="panel" style="width: 150%;">
                                        <div class="panel-body">
                                            <div class="items">
                                                <div class="col-md-8">
                                                    <table class="table table-striped">
                                                        <tr>
                                                           
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <ul>
                                                                    <li> Alamat Toko</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->penjual->alamat}}</b>
                                                            </td>

                                                        </tr>
                                                        <tr> 
                                                             <td>
                                                                 <ul>
                                                                    <li> Nama Toko</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->penjual->nama_toko}}</b>
                                                            </td>

                                                        </tr>

                                                       
                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Nama Pembeli</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->pembeli->nama_lengkap}} </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Alamat Pembeli</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->pembeli->alamat}} </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Nama Produk</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->produk->nama_produk}} </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Ukuran</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->produk->ukuran}} </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Harga Produk</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>Rp. {{number_format($keranjang->produk->harga,0,',','.')}},00 </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Jumlah Produk Yang Di beli</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>{{$keranjang->jumlah}} </b>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                             <td>
                                                                 <ul>
                                                                    <li> Total Pembayaran</li>
                                                                </ul>
                                                            </td>
                                                            <td>
                                                                <b>Rp. {{number_format($keranjang->total,0,',','.')}},00 </b>
                                                            </td>

                                                        </tr>

                                                        
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div><br><br>
                            <form action="{{url('keranjang/updatetf', $keranjang->id_keranjang)}}" method="post" enctype="multipart/form-data">
                                @csrf
                            	<div class="panel panel-default">
	                                <div class="panel-heading">
	                                    <h4 class="panel-title">
	                                        <input type="file" class="form-control" name="poto" required="" oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')" accept=".jpg, .png, .jpeg">
	                                    </h4>
	                                </div>
	                            </div>

	                            <br>
	                            <div class="panel panel-default">
	                                <div class="panel-heading">
	                                    <h4 class="panel-title">
	                                        <div style="text-align: center; width:100%;">
	                                        	<button style="width:100%;" class=" btn btn-success"> <span class="fa fa-upload"></span> Upload Bukti Transfer</button>
	                                        </div>
	                                    </h4>
	                                </div>
	                            </div><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br>

<script>
	function hitung2() {
		var a = $(".a2").val();
		var b = $(".b2").val();

		c = a*b;

		$(".c2").val(c);
	}
</script>

@endsection
	
