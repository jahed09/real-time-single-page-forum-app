<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {

    $sentence =  $faker ->sentence;
    return [
        'title' =>$sentence,
        'slug' =>str_slug($sentence),
        'body' => $faker->text,
        'category_id'=> function(){
            return \App\Model\Category::all()->random();
        },
        'user_id' => function(){
            return \App\User::all()->random();
        }

    ];
});
