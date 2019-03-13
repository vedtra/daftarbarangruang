<?php

namespace App\Models;
use App\Models\pindahbarang;
use Illuminate\Database\Eloquent\Model;

class pindahbarang extends Model
{
    protected $table ='td_dbr_mohon';

    protected $dates = ['deleted_at'];
    protected $fillable = ['id','id_dbr_mohon','jenis_mohon','kode_status_mohon','ruang_asal','ruang_tujuan','nip','keterangan'];

    public function dbr(){
		return $this->belongsTo('App\Models\Dbr','id');
	}
}
