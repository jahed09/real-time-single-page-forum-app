<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Reply;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'body'=> $faker->text,
        'user_id' => function(){
            return \App\User::all()->random();
        },
        'question_id' => function(){
            return \App\Model\Question::all()->random();
    },
    ];
});
