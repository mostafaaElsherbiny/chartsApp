<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Log;
use Carbon\Carbon;
use Faker\Generator as Faker;


$factory->define(Log::class, function (Faker $faker) {
    $gender=['male','female'];
    return [
        'user_id'=>rand(41,80),
        'post_id'=>rand(1,20),
        'gender'=>$gender[rand(0,1)],
        'created_at'=>Carbon::now()->subDays(rand(1,27))->format('y-m-d h:i:s'),
    ];
});
