<?php

namespace App\Models;
use App\Models\RuangMilik;
use Illuminate\Database\Eloquent\Model;


class RuangMilik extends Model
{
   protected $table = 'td_ruang_milik';

    protected $primaryKey = 'id_ruang_milik';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_ruang','kd_unit','nip_rekam','nip_tgjwb','nip_update','no_nd','tgl_awal','tgl_nd'];

 //    public function ruang(){
	// 	return $this->hasOne('App\Models\Ruang','kode_ruang	');
	// }
}
