<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTransaksi extends Model
{
    use HasFactory;
    protected $visible = ['nama', 'jk', 'no_hp', 'id_kereta','id_tiket','jam_berangkat','asal_berangkat','tujuan_berangkat','no_duduk','jumlah']; 
    protected $fillable = ['nama', 'jk', 'no_hp', 'id_kereta','id_tiket','jam_berangkat','asal_berangkat','tujuan_berangkat','no_duduk','jumlah'];
    public $timestamps = true;

   
    public function keretas()
    {
        return $this->belongsTo('App\Models\Kereta', 'id_kereta');
    }
    public function tikets()
    {
        return $this->belongsTo('App\Models\Tiket', 'id_tiket');
    }

}
