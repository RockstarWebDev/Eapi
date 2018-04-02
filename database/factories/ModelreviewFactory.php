<?php

use App\Model\Product;
use App\Model\review;
use Faker\Generator as Faker;

$factory->define(App\Model\review::class, function (Faker $faker) {
    return [
        'product_id'=> function(){
        	return Product::all()->random();
        },
        
        'customer'=>$faker->name,
        'review'=>$faker->paragraph,
        'star'=>$faker->numberBetween(0,5)
    ];
});
