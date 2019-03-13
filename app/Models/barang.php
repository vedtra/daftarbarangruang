<?php
use App\Models\barang;
use App\Models\stok_brg;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{	
	protected $table = 'tr_brg';

	protected $primaryKey = 'kode_brg';

	protected $dates = ['deleted_at'];

	protected $fillable = ['nm_barang','kode_brg','merk','spek_lain','type'];
    //

    public function stokbar()
	{	
		return $this->hasOne('App\Models\stok_brg','kode_barang');
	}

	
}
