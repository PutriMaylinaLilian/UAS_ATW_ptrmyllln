<?php
namespace App\Http\Controllers;

use App\Models\produk;
use App\Models\penjual;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class ProdukController extends Controller {

	public function index(){
		$data['list_produk'] = produk::all();
		$data ['penjual'] = penjual::all();
		return view('produk.index', $data);
	}

	public function store(Request $req){
		
		$produk = new produk;
		$produk->no_hp_penjual = request ('no_hp_penjual');
		$produk->username_penjual = request ('username_penjual');
		$produk->nama_produk = request ('nama_produk');
		$produk->ukuran = request ('ukuran');
		$produk->harga = request ('harga');
		$produk->stok = request ('stok');
		

		if ($req->hasFile('gambar')) {
			$filename = time().Str::random(5).".".$req->gambar->getClientOriginalExtension();
				$req->gambar->move('app/produk', $filename);
				$produk->gambar = $filename;
			$produk->save();
		}

		return redirect('produk');
	}

	function show($id){
		$data['produk'] = produk::find($id);
		return view('produk.show', $data);
	}
	function edit($id){
		$data['produk'] = produk::find($id);
		$data['penjual'] = penjual::all();
		return view('produk.edit', $data);
	}
	function update(Request $req, $id){

		$produk = produk::find($id);
		$produk->nama_produk = request ('nama_produk');
		$produk->ukuran = request ('ukuran');
		$produk->harga = request ('harga');
		$produk->stok = request ('stok');
		

		if ($req->hasFile('gambar')) {
			$filename = time().Str::random(5).".".$req->gambar->getClientOriginalExtension();
				$req->gambar->move('app/produk', $filename);
				$produk->gambar = $filename;
		}
		$produk->save();
			
		return redirect('produk')->with('success','Data Berhasil Diedit');
	}
	function delete($id){
		produk::destroy($id);
		return redirect('produk')->with('danger','Data Berhasil Dihapus');

	}
}