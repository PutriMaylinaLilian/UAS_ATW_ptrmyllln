<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model {
	protected $table = 'pembeli';

	protected $primaryKey ='no_hp_pembeli';
	public $incrementing =false;

	function keranjang(){
		return $this->belongsTo('\App\Models\keranjang', 'no_hp_pembeli');
	}

}