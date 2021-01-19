<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model {
	protected $table = 'produk';

	protected $primaryKey ='id_produk';
	public $incrementing =false;

	function keranjang(){
		return $this->belongsTo('\App\Models\keranjang', 'id_produk');
	}

	function penjual(){
		return $this->belongsTo('\App\Models\penjual', 'no_hp_penjual');
	}

}