<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class keranjang extends Model {
	protected $table = 'keranjang';

	protected $primaryKey ='id_keranjang';
	public $incrementing =false;

	function penjual(){
		return $this->belongsTo('\App\Models\penjual', 'no_hp_penjual');
	}

	function pembeli(){
		return $this->belongsTo('\App\Models\pembeli', 'no_hp_pembeli');
	}

	function produk(){
		return $this->belongsTo('\App\Models\produk', 'id_produk');
	}


}