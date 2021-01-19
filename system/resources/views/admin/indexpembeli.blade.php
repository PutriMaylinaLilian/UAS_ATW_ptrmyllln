@extends('template.admin')

@section('content')

<div class="ecommerce-widget">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header" style="text-align: center; font-size: 20px;">Data Pembeli</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered first">
                            <thead class="bg-light">                      
                        
                            <tr>
                            	<th class="text-center">Nama Lengkap</th>
                            	<th class="text-center">Alamat</th>
                            	<th class="text-center">Nomor Telp</th>
                            	<th class="text-center">Username</th>
                            	<th class="text-center">Password</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($pembeli as $pembeli)
                        		<tr>
                        			<td style="text-align: center;">{{$pembeli->nama_lengkap}}</td>
                        			<td style="text-align: center;">{{$pembeli->alamat}}</td>
                        			<td style="text-align: center;">{{$pembeli->no_hp_pembeli}}</td>
                        			<td style="text-align: center;">{{$pembeli->username}}</td>
                        			<td style="text-align: center;">{{$pembeli->password}}</td>
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