<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        DB::table("categories")->insert([
            "nama"              => "Laravel",
            "slug"              => Str::slug("Laravel", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("categories")->insert([
            "nama"              => "Text Editor",
            "slug"              => Str::slug("Text Editor", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("categories")->insert([
            "nama"              => "CSS",
            "slug"              => Str::slug("CSS", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("categories")->insert([
            "nama"              => "JS",
            "slug"              => Str::slug("JS", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("categories")->insert([
            "nama"              => "PHP",
            "slug"              => Str::slug("PHP", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("categories")->insert([
            "nama"              => "C#",
            "slug"              => Str::slug("C#", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);
    }
}
