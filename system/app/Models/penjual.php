<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class penjual extends Model {
	protected $table = 'penjual';

	protected $primaryKey ='no_hp';
	public $incrementing =false;


	

	function keranjang(){
		return $this->belongsTo('\App\Models\keranjang', 'no_hp_penjual');
	}

	function produk(){
		return $this->belongsTo('\App\Models\produk', 'id_produk');
	}

}