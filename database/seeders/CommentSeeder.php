<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat 20 data dummy comments secara random
        // per comment punya 3 replies
        Comment::factory()
            ->has(Reply::factory()->count(3))
            ->count(20)
            ->create();
    }
}
