<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Category;
use App\Unit;
use App\Brand;
use App\Product;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});


$factory->define(Product::class, function (Faker $faker) {
    return [
        'category_id' => Category::all()->random()->id,
        'unit_id' => Unit::all()->random()->id,
        'brand_id' => Brand::all()->random()->id,
        'product_name' => $faker->name,
        'tag' => $faker->name,
        'serial_number' => $faker->numberBetween(10,100),
        'type' =>  $faker->numberBetween(0,1),
        'model' => $faker->name,
        'offer_price' => $faker->numberBetween(1,50),
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'sale_price' => $faker->numberBetween(1,50),
        'supplier_price' => $faker->numberBetween(1,50),
        'details' => $faker->text,
    ];
});
