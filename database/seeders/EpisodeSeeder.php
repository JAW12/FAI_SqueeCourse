<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("episodes")->insert([
            "judul"             => "What do we need ?",
            "slug"              => Str::slug("What do we need ?", "-"),
            "row_id_seri"       => 1,
            "durasi"            => 375,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/-82XvDLsGKc",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Laravel Installation",
            "slug"              => Str::slug("Laravel Installation", "-"),
            "row_id_seri"       => 1,
            "durasi"            => 409,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/8UjkrH6xYNg",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Valet & MySQL",
            "slug"              => Str::slug("Valet & MySQL", "-"),
            "row_id_seri"       => 1,
            "durasi"            => 515,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/H2tK1USF6x4",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Laravel, Composer, MySQL Installation",
            "slug"              => Str::slug("Laravel, Composer, MySQL Installation", "-"),
            "row_id_seri"       => 2,
            "durasi"            => 564,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/ucV7ynY4M8A",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Laravel 7 Instalation",
            "slug"              => Str::slug("Laravel 7 Instalation", "-"),
            "row_id_seri"       => 2,
            "durasi"            => 765,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/XtEpLqr4xVg",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Preparation for Laravel 8",
            "slug"              => Str::slug("Preparation for Laravel 8", "-"),
            "row_id_seri"       => 3,
            "durasi"            => 257,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/pUxT0G2j5q8",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Model Directory Bash",
            "slug"              => Str::slug("Model Directory Bash", "-"),
            "row_id_seri"       => 3,
            "durasi"            => 107,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/fFWiOO3xLww",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "The new maintenance mode is awesome",
            "slug"              => Str::slug("The new maintenance mode is awesome", "-"),
            "row_id_seri"       => 3,
            "durasi"            => 309,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/4shENynVKQQ",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Factory has changed",
            "slug"              => Str::slug("Factory has changed", "-"),
            "row_id_seri"       => 3,
            "durasi"            => 326,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/DdhtOorFlSk",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Let's do it",
            "slug"              => Str::slug("Let's do it", "-"),
            "row_id_seri"       => 4,
            "durasi"            => 864,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/LcxJcH11Hng",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "What's your own theme?",
            "slug"              => Str::slug("What's your own theme?", "-"),
            "row_id_seri"       => 4,
            "durasi"            => 952,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/9AA83tEttsY",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Snippet is our best friend",
            "slug"              => Str::slug("Snippet is our best friend", "-"),
            "row_id_seri"       => 4,
            "durasi"            => 778,
            "status_berbayar"   => 1,
            "url_youtube"       => "https://www.youtube.com/embed/VHRKxVBr3qM",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Grid",
            "slug"              => Str::slug("Grid", "-"),
            "row_id_seri"       => 5,
            "durasi"            => 410,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/db88BsxsQ7w",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Responsive",
            "slug"              => Str::slug("Responsive", "-"),
            "row_id_seri"       => 5,
            "durasi"            => 389,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/IAm1lSdcRns",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Mix and Bootstrap 5 Installation",
            "slug"              => Str::slug("Mix and Bootstrap 5 Installation", "-"),
            "row_id_seri"       => 6,
            "durasi"            => 754,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/6z-mmJa3NT0",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Let's create a login page",
            "slug"              => Str::slug("Let's create a login page", "-"),
            "row_id_seri"       => 6,
            "durasi"            => 974,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/z9UNSZf-0p0",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "What a great navigations!",
            "slug"              => Str::slug("What a great navigations!	", "-"),
            "row_id_seri"       => 6,
            "durasi"            => 822,
            "status_berbayar"   => 1,
            "url_youtube"       => "https://www.youtube.com/embed/_aeMjPUwHgA",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Which installations do we need?",
            "slug"              => Str::slug("Which installations do we need?", "-"),
            "row_id_seri"       => 7,
            "durasi"            => 994,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/0xqwsd1tVmU",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Let's use the utilities",
            "slug"              => Str::slug("Let's use the utilities", "-"),
            "row_id_seri"       => 7,
            "durasi"            => 583,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/3KZL6zJspXg",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Grid or Flexbox",
            "slug"              => Str::slug("Grid or Flexbox", "-"),
            "row_id_seri"       => 7,
            "durasi"            => 646,
            "status_berbayar"   => 1,
            "url_youtube"       => "https://www.youtube.com/embed/DSbTVrkrZqM",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Tailwind CSS and Mix Installations",
            "slug"              => Str::slug("Tailwind CSS and Mix Installations", "-"),
            "row_id_seri"       => 8,
            "durasi"            => 589,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/ZuhhbL45QrM",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Let's implement the utilities",
            "slug"              => Str::slug("Let's implement the utilities", "-"),
            "row_id_seri"       => 8,
            "durasi"            => 710,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/qPNpr4yofkQ",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Container and configuration file",
            "slug"              => Str::slug("Container and configuration file", "-"),
            "row_id_seri"       => 8,
            "durasi"            => 562,
            "status_berbayar"   => 1,
            "url_youtube"       => "https://www.youtube.com/embed/sbI-e9eJbDI",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Laravel and vue setup",
            "slug"              => Str::slug("Laravel and vue setup", "-"),
            "row_id_seri"       => 9,
            "durasi"            => 586,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/Cq8OuP7ni8w",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Router for SPA",
            "slug"              => Str::slug("Router for SPA", "-"),
            "row_id_seri"       => 9,
            "durasi"            => 1334,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/1T-yQi8xOf0",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Database Structure",
            "slug"              => Str::slug("Database Structure", "-"),
            "row_id_seri"       => 9,
            "durasi"            => 514,
            "status_berbayar"   => 1,
            "url_youtube"       => "https://www.youtube.com/embed/jO6umeJzJ4E",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Hello React",
            "slug"              => Str::slug("Hello React", "-"),
            "row_id_seri"       => 10,
            "durasi"            => 430,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/CX4tYNBkqCk",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Basic React State",
            "slug"              => Str::slug("Basic React State", "-"),
            "row_id_seri"       => 10,
            "durasi"            => 535,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/IgsZfWQHiYg",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Form Handling",
            "slug"              => Str::slug("Form Handling", "-"),
            "row_id_seri"       => 10,
            "durasi"            => 705,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/ci5YQR4qV-A",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);

        DB::table("episodes")->insert([
            "judul"             => "Let's change it to stateless",
            "slug"              => Str::slug("Let's change it to stateless", "-"),
            "row_id_seri"       => 10,
            "durasi"            => 603,
            "status_berbayar"   => 0,
            "url_youtube"       => "https://www.youtube.com/embed/ap0dEBMFP_4",
            "created_at"        => now(),
            "updated_at"        => now()
        ]);
    }
}
