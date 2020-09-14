<?php

namespace App\Model\Tiket;

use Illuminate\Database\Eloquent\Model;
use App\Model\Transaksi\Transaksi;
class Tiket extends Model
{
    //
    protected $guarded = [];

    public function RelasiCantegory(){
        return $this->belongsTo('App\Model\Category\Category', 'id_category', 'id');
    }

    public function RelasiHasManyTiket(){
        return $this->hasMany('App\Model\Transaksi\Transaksi', 'id_tiket', 'id');
    }
}
