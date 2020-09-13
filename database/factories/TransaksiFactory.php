<?php

use Faker\Generator as Faker;
use App\Model\Tiket\Tiket;
$factory->define(App\Model\Transaksi\Transaksi::class, function (Faker $faker) {
    return [
        //
        'id_tiket'=>function(){
            return Tiket::all()->random();
        },
        'qty'=>rand(1,20),
        'status'=>rand(0,1)
    ];
});
