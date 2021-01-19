<?php
namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\penjual;
use App\Models\keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class PesananController extends Controller {

	public function index(){
		$data['list_keranjang'] = keranjang::where('status', '3')->get();
		$data ['penjual'] = penjual::all();
		return view('pesanan.index', $data);
	}

	public function terkirim(){
		$data['list_keranjang'] = keranjang::where('status', '4')->get();
		$data ['penjual'] = penjual::all();
		return view('pesanan.terkirim', $data);
	}

	public function sampai(){
		$data['list_keranjang'] = keranjang::where('status', '5')->get();
		$data ['penjual'] = penjual::all();
		return view('pesanan.sampai', $data);
	} 


	function updatepesanan(Request $req, $id){

		$keranjang = keranjang::find($id);
		$keranjang->status =4;
		$keranjang->save();
			
		return redirect('pesanan')->with('success','Data Berhasil Diedit');
	}
	
}