<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $visible = ['jenis_tiket','stok', 'harga']; 
    protected $fillable = ['jenis_tiket','stok', 'harga'];
    public $timestamps = true;

    
    public function penumpangs()
    {
        
        return $this->hasMany('App\Models\Penumpang', 'id_tiket');
    }
}
