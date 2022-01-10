<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kereta extends Model
{
    use HasFactory;
    protected $visible = ['id_penumpang','nama_kereta','jam_berangkat','asal_berangkat', 'tujuan_berangkat'];
    protected $fillable = ['id_penumpang','nama_kereta','jam_berangkat', 'asal_berangkat', 'tujuan_berangkat'];
    public $timestamps = true;

    public function penumpangs()
    {
        return $this->belongsTo('App\Models\Penumpang', 'id_penumpang');
    }
}
