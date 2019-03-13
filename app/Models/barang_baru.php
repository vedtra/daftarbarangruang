<?php
use App\Models\barang_baru;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang_baru extends Model
{
    protected $table = 'td_mohon_baru';

	protected $primaryKey = 'id';

	protected $dates = ['deleted_at'];

	protected $fillable = ['nm_brg','jenis_mohon','jumlah','kode_status_mohon','ruang_tujuan','keperluan'];
}
