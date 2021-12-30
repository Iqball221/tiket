<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penumpang extends Model
{
    use HasFactory;
    protected $visible = ['nama','jk','no_hp','jenis_tiket','asal','tujuan_berangkat','tgl_berangkat','jumlah','total'];
    protected $fillable = ['nama','jk','no_hp','jenis_tiket','asalt','tujuan_berangkat','tgl_berangkat','jumlah','total'];
    public $timestamps =true;
    public function transaksis()
{
    return $this->hasMany('App\Models\Transaksi','Id_penumpang');
}
}
