<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $visible = ['jenis_transaksi','id_penumpang'];
    protected $fillable = ['jenis_transaksi','id_penumpang'];
    public $timestamps =true;

    public function penumpangs()
{
    return $this->belongsTo('App\Models\Penumpang','Id_penumpang');
}
}
