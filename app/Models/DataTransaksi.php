<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;
    protected $visible = ['id_penumpang', 'id_transaksi', 'id_kereta', 'id_tiket','asal','tujuan','jumlah','total']; 
    protected $fillable = ['id_penumpang', 'id_transaksi', 'id_kereta', 'id_tiket','asal','tujuan','jumlah','total'];
    public $timestamps = true;

     public function penumpangs()
    {
        return $this->belongsTo('App\Models\Penumpang', 'id_penumpang');
    }
     public function transaksis()
    {
        return $this->belongsTo('App\Models\Transaksi', 'id_transaksi');
    }
    public function keretas()
    {
        return $this->belongsTo('App\Models\Kereta', 'id_kereta');
    }
    public function tikets()
    {
        return $this->belongsTo('App\Models\Tiket', 'id_tiket');
    }

}
