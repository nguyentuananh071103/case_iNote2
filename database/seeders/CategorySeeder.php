<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('categories')->insert([
            ["name" => "Công việc"],
            ["name" => "Học tập"],
            ["name" => "Trường học"],
            ["name" => "Vui chơi"],
            ["name" => "Gia đình"],
            ["name" => "Bạn bè"]
        ]);
    }
}
