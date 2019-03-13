<?php

namespace App\Models;
use App\Models\barang_tolak_baru;
use Illuminate\Database\Eloquent\Model;

class barang_tolak_baru extends Model
{
    protected $table ='td_mohon_baru';

    protected $primaryKey = 'tolak';

    protected $dates = ['deleted_at'];
    protected $fillable = ['id','nm_brg','jenis_mohon','jumlah','Nip','kode_status_mohon','ruang_tujuan','keperluan','keterangan'];

}
