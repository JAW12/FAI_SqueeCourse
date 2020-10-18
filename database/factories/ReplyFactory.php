<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReplyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reply::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users = User::pluck('id')->toArray();
        $comments = Comment::pluck('id')->toArray();

        return [
            "row_id_user"       => $this->faker->randomElement($users),
            "row_id_komentar"   => $this->faker->randomElement($comments) ,
            "isi_reply"         => $this->faker->paragraphs(3, true)
        ];
    }
}
