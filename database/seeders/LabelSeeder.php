<?php

namespace Database\Seeders;

use App\Models\Label;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data dummy
        DB::table("labels")->insert([
            "nama"              => "Framework",
            "slug"              => Str::slug("Framework", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("labels")->insert([
            "nama"              => "Bootstrap",
            "slug"              => Str::slug("Bootstrap", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("labels")->insert([
            "nama"              => "Tailwind",
            "slug"              => Str::slug("Tailwind", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("labels")->insert([
            "nama"              => "News",
            "slug"              => Str::slug("News", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("labels")->insert([
            "nama"              => "Tips",
            "slug"              => Str::slug("Tips", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("labels")->insert([
            "nama"  => "Development",
            "slug"  => Str::slug("Development", "-"),
            "created_at"        => now(),
            "updated_at"        => now()
        ]);


    }
}
