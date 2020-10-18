<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Label;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat 15 data dummy posts secara random
        Post::factory()
            ->has(Label::factory()->count(2))
            ->count(15)
            ->create();
    }
}
