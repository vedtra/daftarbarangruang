<?php

namespace App\Models;
use App\Models\barang_tolak;
use Illuminate\Database\Eloquent\Model;

class barang_tolak extends Model
{
    protected $table ='td_dbr_mohon';

    protected $primaryKey = 'tolak';

    protected $dates = ['deleted_at'];
    protected $fillable = ['id','id_dbr_mohon','jenis_mohon','kode_status_mohon','ruang_asal','ruang_tujuan','nip','keterangan'];

    public function dbr(){
		return $this->belongsTo('App\Models\Dbr','id');
	}
}
