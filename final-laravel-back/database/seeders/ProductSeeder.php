<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Cast\Bool_;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->inser([
            'product_name'=> Str::random(10),
            'slug'=> Str::random(10),
            'product_description'=> Str::random(10),
            'price'=> random_int(100, 999),
            'availability'=> true,
            'category_id'=> 1,
            'item_list'=> Str::random(10)
        ]);
    }
}
