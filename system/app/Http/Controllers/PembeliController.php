<?php
namespace App\Http\Controllers;

use App\Models\pembeli;
use App\Models\produk;
use App\Models\keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PembeliController extends Controller {

	public function index(){
		$data['produk'] = produk::all();
		$data['list_pembeli'] = pembeli::all();

		$data['dt_keranjang'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_keranjang'] = keranjang::where('status', '1')->get();

		$data['dt_konfir'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_konfir'] = keranjang::where('status', '4')->get();

		
		return view('pembeli.index',$data);
	}
}