<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

/**
 * 
 */
class AuthController extends Controller{
	
	function Login(){
		return view('login');
	}

	function loginproses(Request $req){

		$this->validate(Request(), [
			'username' => 'required',
			'password' => 'required',

	]);

	if(Auth::attempt (['username' => $req->username, 'password' => $req->password])){
			if(Auth::user()->level ==1){
				return redirect ('admin')->with('success', 'Anda Berhasil Login');

			}else if(Auth::user()->level ==2){
				return redirect ('penjual')->with('success', 'Anda Berhasil Login');
				
			}else if(Auth::user()->level ==3){
				return redirect ('pembeli')->with('success', 'Anda Berhasil Login');
							
			}return redirect('login');
			
			}else{	
				return redirect ('login')->with('login_error','Username Atau Password Anda Salah!');
			}


	}

	function logout(){

		return view('login');

	}

	function test(){
		$user = new user;

		$user->username = 'admin';
		$user->nama = 'Admin';
		$user->password = bcrypt('admin');
		$user->level = 1;
		$user->save();

		return "Berhasil";
		
		
	}
}