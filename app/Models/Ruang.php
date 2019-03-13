<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Ruang;

class Ruang extends Model
{
    protected $table = 'tr_ruang';

    protected $primaryKey = 'id_ruang';

    protected $dates = ['deleted_at'];
    protected $fillable = ['keterangan','nm_ruang'];

 //    public function ruangmilik(){
	// 	return $this->belongsTo('App\Models\RuangMilik','id_ruang_milik','id_ruang');
	// }
}
