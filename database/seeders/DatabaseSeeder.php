<?php

namespace Database\Seeders;

use App\Models\Series;
use Illuminate\Database\Seeder;
use LabelSeri;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // call seeder
        $this->call([
            UserSeeder::class,
            LabelSeeder::class,
            CategorySeeder::class,
            TransactionSeeder::class,
            QuizSeeder::class,
            QuestionSeeder::class,
            PostSeeder::class,
            SeriesSeeder::class,
            EpisodeSeeder::class,
            ReplySeeder::class,
            CommentSeeder::class,
            LabelSeriSeeder::class,
        ]);
    }
}
