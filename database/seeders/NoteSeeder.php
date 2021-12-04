<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notes')->insert([
            ["title"=>"van hoc","content"=>"chiec thuyen danh ca"],
            ["title"=>"toan hoc","content"=>"luyen tap tich phan"],
            ["title"=>"dia ly","content"=>"gioi thieu dat lien nuoc ta"]
        ]);
    }
}
