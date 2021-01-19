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
                                        
                                        <th>Nama Produk</th>
                                        <th>Jumlah</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Gambar Produk</th>
                                        <th>Bukti Tf</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($list_keranjang as $keranjang)
                                    @if((Auth::user()->username) == $keranjang->username_penjual)
                                    <tr>
                                        
                                        <td>{{$keranjang->produk->nama_produk}}</td>
                                        <td>{{$keranjang->ukuran}}</td>
                                        <td>Rp. {{number_format($keranjang->harga,0,',','.')}},00</td>
                                        <td> {{$keranjang->produk->stok}}</td>
                                        <td>
                                            <img src="{{url('app/produk', $keranjang->produk->gambar)}}" style="width: 150px; height: 150px; border-radius: 10px;">
                                        </td>
                                        <td>
                                            <img src="{{url('app/keranjang', $keranjang->poto)}}" style="width: 150px; height: 150px; border-radius: 10px;">
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

    

@endsection