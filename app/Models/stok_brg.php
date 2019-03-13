<?php

namespace App\Models;
use App\Models\barang;
use App\Models\stok_brg;
use Illuminate\Database\Eloquent\Model;

class stok_brg extends Model
{
    protected $table = 'td_brg_stok';

    protected $primaryKey = 'id';

    protected $dates = ['deleted_at'];
    protected $fillable = ['kode_barang','jumlah','no_bast','saldo','tahun','tgl_bast'];

    public function barang()
    {
		return $this->belongsTo('App\Models\barang','kode_barang');
	}
}
