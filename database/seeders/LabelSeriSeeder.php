<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LabelSeriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data dummy
        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 1,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 2,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 3,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 5,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 6,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 7,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 8,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 1,
            "row_id_seri"   => 9,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 2,
            "row_id_seri"   => 5,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 2,
            "row_id_seri"   => 6,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 3,
            "row_id_seri"   => 7,
        ]);

        DB::table('label_seri')->insert([
            "row_id_label"  => 3,
            "row_id_seri"   => 8,
        ]);
    }
}
