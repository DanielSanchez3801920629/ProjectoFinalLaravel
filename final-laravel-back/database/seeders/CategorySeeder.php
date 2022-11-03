<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sales')->inser([
            'category_name'=> Str::random(10),
            'slug'=> Str::random(10),
            'category_description'=> Str::random(10),
            'category_priority'=> random_int(100, 999),
        ]);
    }
}
