<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'category_id' => numberBetween(1,5),
            'unit_id' => numberBetween(1,5),
            'brand_id' => numberBetween(1,5),
            'tax' => numberBetween(1,5),
            'product_name' => Str::random(10),
            'tag' => Str::random(10),
            'serial_number' => Str::random(10),
            'type' => Str::random(10),
            'model' => Str::random(10),
            'offer_price' => numberBetween(1,50),
            'image' => Str::random(10),
            'sale_price' => numberBetween(1,50),
            'supplier_price' => numberBetween(1,50),
            'details' => taxt(10000),
        ]);
    }
}
