<?php

use Faker\Generator as Faker;
use App\Model\Category\Category;
$factory->define(App\Model\Tiket\Tiket::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        //
        'nama_tiket'=>$word,
        'harga_tiket'=> $faker->randomElement(['20000', '50000','100000','500000']),
        'jenis_tiket'=>rand(1,4),
        'id_category'=>function(){
            return Category::all()->random();
        },
        'jumlah_tiket'=>rand(1, 30),
    ];
});
