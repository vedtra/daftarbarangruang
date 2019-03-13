<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dbr;
use App\Models\pindahbarang;

class Dbr extends Model
{
    protected $table = 'td_dbr';

    protected $primaryKey = 'id_dbr';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_ruang_milik','jlh_brg','nip_dbr','no_bast','kode_status','tgl_akhir','tgl_awal','tgl_bast','kode_barang'];

    public function barang()
    {
		return $this->belongsTo('App\Models\barang','kode_brg');
	}
	public function pindahbarang()
	{
		return $this->hasOne('App\Models\pindahbarang','id_mohon');
	}

}
