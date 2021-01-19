<?php
namespace App\Http\Controllers;

use App\Models\penjual;
use App\Models\pembeli;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class RegisterController extends Controller {

	public function penjual(){
		
		return view('register.penjual');
	}

	public function storepenjual(Request $req){
		
		$user = new User;
		$user->username = $req->username;
		$user->nama = $req->nama_lengkap;
		$user->password = bcrypt($req->password);
		$user->level = 2;
		$user->save();

		$penjual = new penjual;
		$penjual->no_hp = request ('no_hp');
		$penjual->id_user = $user->id;
		$penjual->nama_lengkap = request ('nama_lengkap');
		$penjual->nama_toko = request ('nama_toko');
		$penjual->username = request ('username');
		$penjual->password = request ('password');
		$penjual->alamat = request ('alamat');
		

		if ($req->hasFile('poto')) {
			$filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
				$req->poto->move('app/penjual', $filename);
				$penjual->poto = $filename;
			$penjual->save();
		}

		return redirect('login');
	}


	public function pembeli(){
		
		return view('register.pembeli');
	}


	public function storepembeli(Request $req){
		
		$user = new User;
		$user->username = $req->username;
		$user->nama = $req->nama_lengkap;
		$user->password = bcrypt($req->password);
		$user->level = 3;
		$user->save();

		$pembeli = new pembeli;
		$pembeli->no_hp_pembeli = request ('no_hp_pembeli');
		$pembeli->id_user = $user->id;
		$pembeli->nama_lengkap = request ('nama_lengkap');
		$pembeli->username = request ('username');
		$pembeli->password = request ('password');
		$pembeli->alamat = request ('alamat');
		

		if ($req->hasFile('poto')) {
			$filename = time().Str::random(5).".".$req->poto->getClientOriginalExtension();
				$req->poto->move('app/pembeli', $filename);
				$pembeli->poto = $filename;
			$pembeli->save();
		}

		return redirect('login');
		
	}
}