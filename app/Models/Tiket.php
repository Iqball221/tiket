<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $visible = ['id_penumpang','jenis_tiket', 'no_duduk', 'stok', 'total_terjual']; 
    protected $fillable = ['id_penumpang','jenis_tiket', 'no_duduk', 'stok', 'total_terjual'];
    public $timestamps = true;

    
    public function penumpangs()
    {
        
        return $this->hasMany('App\Models\Penumpang', 'id_penumpang');
    }
}
