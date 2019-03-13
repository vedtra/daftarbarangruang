<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
namespace App;

class Ruang extends Model
{
    protected $table = 'tr_ruang';

    protected $primaryKey = 'id_ruang';

    protected $dates = ['deleted_at'];
    protected $fillable = ['keterangan','nm_ruang'];
}
