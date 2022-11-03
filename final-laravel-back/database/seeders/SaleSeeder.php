<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SaleSeeder extends Seeder
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
            'client_name'=> Str::random(10),
            'client_phone'=> Str::random(10),
            'total_value'=> random_int(100, 999),
            'item_list'=> Str::random(10)
        ]);
    }
}
