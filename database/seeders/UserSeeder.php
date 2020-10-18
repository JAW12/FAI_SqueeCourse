<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "username"              => "winda",
            "password"              => password_hash("winda", PASSWORD_DEFAULT),
            "nama"                  => "Winda Angelina Utama",
            "email"                 => "wau1395@gmail.com",
            "no_hp"                 => "082212345678",
            "jenis_kelamin"         => "P",
            "tanggal_lahir"         => date("Y-m-d", strtotime(str_replace('/', '-', '13/03/2000'))),
            "bekerja_sebagai"       => "Senior Computer Laboratory Assistant",
            "sedikit_tentang_anda"  => "a flawed and fabulous +62 human",
            "tempat_kerja"          => "Institut Sains dan Teknologi Terpadu Surabaya",
            "url_website"           => "https://www.linkedin.com/in/winda-angelina-utama",
            "url_github"            => "https://github.com/windaangellina",
            "url_twitter"           => "https://twitter.com/",
            "url_facebook"          => "https://www.facebook.com/windaangellina.utama",
            "url_instagram"         => "https://www.instagram.com/wind.au/",
            'remember_token'        => Str::random(10),
            "created_at"            => now(),
            "updated_at"            => now(),
        ]);

        DB::table('users')->insert([
            "username"              => "bambang",
            "password"              => password_hash("bambang", PASSWORD_DEFAULT),
            "nama"                  => "Bambang Budiman Ferguso",
            "email"                 => "bambang123@gmail.com",
            'remember_token'        => Str::random(10),
            "created_at"            => now(),
            "updated_at"            => now(),
        ]);
    }
}
