<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Episode;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $episodes = Episode::pluck('id')->toArray();

        return [
            "row_id_user"       => $this->faker->randomElement($users),
            "row_id_episode"    => $this->faker->randomElement($episodes) ,
            "isi_komentar"      => $this->faker->paragraphs(5, true)
        ];
    }
}
