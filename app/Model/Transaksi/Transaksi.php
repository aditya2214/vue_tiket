<?php

namespace App\Model\Transaksi;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //

    protected $guarded = [];
    public function RelasiTiket(){
        return $this->belongsTo('App\Model\Tiket\Tiket','id_tiket','id');
    }
}
