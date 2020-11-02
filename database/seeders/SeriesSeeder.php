<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("series")->insert([
            "judul"                 => "Learn Laravel 6 From Scratch",
            "slug"                  => Str::slug("Learn Laravel 6 From Scratch", "-"),
            "row_id_kategori"       => 1,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 1,
            "total_durasi"          => 1299,
            "status_complete"       => 1,
            "status_berbayar"       => 0,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-laravel-60-dari-awal.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan mempelajari laravel 6.0 dari benar - benar awal. Jadi ketika Anda belum pernah terjun ke dunia framework laravel, maka seri ini mungkin yang Anda cari selama ini."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Laravel 7 From Scratch",
            "slug"                  => Str::slug("Learn Laravel 7 From Scratch", "-"),
            "row_id_kategori"       => 1,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 1,
            "total_durasi"          => 1329,
            "status_complete"       => 1,
            "status_berbayar"       => 0,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-laravel-7-dari-awal-1587020073.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan belajar Laravel 7 dari awal, kita akan belajar basic sampai nanti akhirnya kita bisa buat aplikasi sederhana yang mungkin bisa meningkatkan skill Anda dalam membangun web dengan Laravel."
        ]);

        DB::table("series")->insert([
            "judul"                 => "What's New on Laravel 8",
            "slug"                  => Str::slug("What's New on Laravel 8", "-"),
            "row_id_kategori"       => 1,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 1,
            "total_durasi"          => 999,
            "status_complete"       => 0,
            "status_berbayar"       => 0,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/apa-yang-baru-di-laravel-8-1599678926.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Di seri ini kita akan mempelajari tentang apa - apa saja fitur terbaru yang dirilis dalam Laravel versi 8 ini. Jika Anda tertarik, mari kita bahas step by step."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Mastering Visual Studio Code",
            "slug"                  => Str::slug("Mastering Visual Studio Code", "-"),
            "row_id_kategori"       => 2,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 2,
            "total_durasi"          => 2594,
            "status_complete"       => 1,
            "status_berbayar"       => 1,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/menguasai-visual-studio-code-1586930210.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Kita akan belajar Visual Studio Code jauh lebih dalam, kita tidak akan belajar sekedar hanya memakai, namun bagaimana membuat kita nyaman memakai text editor ini."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Bootstrap 4",
            "slug"                  => Str::slug("Learn Bootstrap 4", "-"),
            "row_id_kategori"       => 3,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 1,
            "total_durasi"          => 799,
            "status_complete"       => 1,
            "status_berbayar"       => 0,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-bootstrap-4-dari-awal.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Ketika anda sudah bisa mengimplementasikan css dengan baik, kini tiba saatnya mulai menggunakan framework yang sangat sering digunakan oleh pengembang - pengembang saat ini."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Bootstrap 5 with SASS",
            "slug"                  => Str::slug("Learn Bootstrap 5 with SASS", "-"),
            "row_id_kategori"       => 3,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 3,
            "total_durasi"          => 2550,
            "status_complete"       => 0,
            "status_berbayar"       => 1,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-bootstrap-5-dengan-sass-1595202841.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan belajar memakai Bootstrap dan yang pastinya itu adalah versi paling terbaru yaitu 5, dan disini kita juga akan mengimplementasikan Bootstrap dengan CSS Pre-processor yaitu SASS."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Tailwind CSS From Scratch",
            "slug"                  => Str::slug("Learn Tailwind CSS From Scratch", "-"),
            "row_id_kategori"       => 3,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 2,
            "total_durasi"          => 2223,
            "status_complete"       => 0,
            "status_berbayar"       => 1,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-tailwind-css-17-dari-awal-1599011327.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan belajar tentang bagaimana sebenarnya cara memakai Tailwind CSS itu. Kita akan mempelajari beberapa teknik yang mungkin Anda sendiri belum pernah memakainya."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Tailwind CSS 1.1 From Scratch",
            "slug"                  => Str::slug("Learn Tailwind CSS 1.1 From Scratch", "-"),
            "row_id_kategori"       => 3,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 3,
            "total_durasi"          => 1861,
            "status_complete"       => 0,
            "status_berbayar"       => 1,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/belajar-tailwind-css-17-dari-awal-1599011327.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan bahas tailwind css dari awal, jadi jika Anda belum pernah menggunakannya sebelumnya, coba dulu untuk sekali. Kita akan belajar basic, layout, dan beberapa komponen penting yang sebenarnya semua kita bisa buat melalui tailwind itu sendiri tanpa ada batasan. Let's dive in!"
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Laravel, Vue SPAs, Vue CLI, Note App",
            "slug"                  => Str::slug("Learn Laravel, Vue SPAs, Vue CLI, Note App", "-"),
            "row_id_kategori"       => 4,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 3,
            "total_durasi"          => 2434,
            "status_complete"       => 1,
            "status_berbayar"       => 1,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/membangun-blog-dengan-laravel-santum-vue-1587022781.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Kita akan mempelajari bagaimana sebenarnya menggunakan Vue SPA didalam Laravel Framework. Setelah itu, kita juga akan convert dari vue Laravel ke dalam Vue CLI."
        ]);

        DB::table("series")->insert([
            "judul"                 => "Learn Basic React JS",
            "slug"                  => Str::slug("Learn Basic React JS", "-"),
            "row_id_kategori"       => 4,
            "row_id_kuis"           => null,
            "tingkat_kesulitan"     => 1,
            "total_durasi"          => 2273,
            "status_complete"       => 1,
            "status_berbayar"       => 0,
            "url_foto_banner"       => "https://parsinta.com/storage/images/series/mari-kita-belajar-basic-react-js-1598047011.jpeg",
            "created_at"            => now(),
            "updated_at"            => now(),
            "deskripsi"             => "Dalam seri ini kita akan mempelajari basic React JS, kita akan mempelajari tentang router, state, dan nantinya kita akan membahas tentang bagaimana mengimplementasikan nya dengan Restful API."
        ]);
    }
}
