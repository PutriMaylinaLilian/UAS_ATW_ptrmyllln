<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class PenjualController extends Controller {

	public function index(){
		
		return view('penjual.index');
	}
}