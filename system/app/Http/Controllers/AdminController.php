<?php
namespace App\Http\Controllers;

use App\Models\penjual;
use App\Models\pembeli;
use App\Models\produk;
use App\Models\keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller {

	public function index(){
		
		return view('admin.index');
	}


	public function indexpenjual(){
		$data['penjual'] = penjual::all();

		return view('admin.indexpenjual', $data);
	}


	public function indexpembeli(){
		$data['pembeli'] = pembeli::all();		
		return view('admin.indexpembeli',$data);
	}


	public function indexproduk(){

		$data['produk'] = produk::all();
		
		return view('admin.indexproduk',$data);
	}


	public function indexkeranjang(){

		$data['keranjang'] = keranjang::all();
		
		return view('admin.indexkeranjang',$data);
	}
}