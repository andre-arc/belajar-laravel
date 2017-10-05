<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

	$title = $faker->sentence();

    return [
		'title'       => $title,
		'slug'        => str_slug($title),
		'content'     => $faker->paragraphs(rand(200, 500), true),
		'category_id' => $faker->numberBetween(1, 2)
    ];
});
