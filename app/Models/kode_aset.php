<?php

namespace App\Models;
use App\Models\kode_aset;
use Illuminate\Database\Eloquent\Model;

class kode_aset extends Model
{
	protected $table ='td_brg_dtl';
	protected $primaryKey = 'id_brg_dtl';

	protected $dates = ['deleted_at'];



	protected $fillable = ['id_brg_stok','id_gol','id_bid','id_kel','id_subkel','id_ssubkel','kondisi','nup'];




    //
}
