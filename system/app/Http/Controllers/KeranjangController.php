<?php
namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\penjual;
use App\Models\keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class KeranjangController extends Controller {

	public function index(){
		$data['keranjang'] = keranjang::all();
		$data ['produk'] = produk::all();

		$data['dt_keranjang'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_keranjang'] = keranjang::where('status', '1')->get();

		$data['dt_konfir'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_konfir'] = keranjang::where('status', '4')->get();
		return view('keranjang.index', $data);
	}

	public function konfirmasi(){
		$data['keranjang'] = keranjang::all();
		$data ['produk'] = produk::all();

		$data['dt_keranjang'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_keranjang'] = keranjang::where('status', '1')->get();

		$data['dt_konfir'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_konfir'] = keranjang::where('status', '4')->get();
		return view('keranjang.konfirmasi', $data);
	}

	public function storekeranjang(Request $req){
		
		$keranjang = new keranjang;
		$keranjang->id_produk = request ('id_produk');
		$keranjang->no_hp_penjual = request ('no_hp_penjual');
		$keranjang->username_penjual = request ('username_penjual');
		$keranjang->no_hp_pembeli = request ('no_hp_pembeli');
		$keranjang->username_pembeli = request ('username_pembeli');
		$keranjang->ukuran = request ('ukuran');
		$keranjang->harga = request ('harga');
		$keranjang->status = 1;
		$keranjang->save();
		

		return redirect('pembeli');
	}

	function show($id){
		$data['produk'] = produk::find($id);
		return view('produk.show', $data);
	}

	function edit($id){
		$data['keranjang'] = keranjang::find($id);
		$data['produk'] = produk::all();

		$data['dt_keranjang'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_keranjang'] = keranjang::where('status', '1')->get();

		$data['dt_konfir'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_konfir'] = keranjang::where('status', '4')->get();
		return view('keranjang.edit', $data);
	}

	function update(Request $req, $id){

		$keranjang = keranjang::find($id);
		$keranjang->harga = request ('harga');
		$keranjang->jumlah = request ('jumlah');
		$keranjang->total = request ('total');
		$keranjang->status = 2;
		
		$keranjang->save();
			
		return redirect('keranjang')->with('success','Data Berhasil Diedit');
	}

	function updatekonfir(Request $req, $id){

		$keranjang = keranjang::find($id);
		$keranjang->status = 5;
		
		$keranjang->save();
			
		return redirect('keranjang/konfirmasi')->with('success','Data Berhasil Diedit');
	}

	function upload($id){
		$data['keranjang'] = keranjang::find($id);
		$data['produk'] = produk::all();

		$data['dt_keranjang'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_keranjang'] = keranjang::where('status', '1')->get();

		$data['dt_konfir'] = keranjang::orderBy('id_keranjang', 'DESC')->take(1)->get();
		$data['data_konfir'] = keranjang::where('status', '4')->get();
		return view('keranjang.upload', $data);
	}

	function updatetf(Request $req, $id){

		$keranjang = keranjang::find($id);
		$keranjang->status = 3;

		if ($req->hasFile('poto')) {
			$filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
				$req->poto->move('app/keranjang', $filename);
				$keranjang->poto = $filename;
		}
		
		$keranjang->save();
			
		return redirect('keranjang')->with('success','Data Berhasil Diedit');
	}


	function delete($id){
		keranjang::destroy($id);
		return redirect('keranjang')->with('danger','Data Berhasil Dihapus');

	}
}