<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'name' => $title,   //uno dos
        'slug' => str_slug($title), //uno-dos
    ];
});
