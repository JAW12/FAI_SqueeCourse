<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // relasi many to one : random foreign key
        $categories = Category::pluck('id')->toArray();
        $judul = $this->faker->text(40);

        return [
            "judul" => $judul,
            "isi"   => $this->faker->paragraphs(10, true),
            "slug"  => Str::slug($judul),
            "status_aktif"  => rand(0,1),
            "created_at"    => now(),
            "updated_at"    => now(),
            "row_id_kategori"   => $this->faker->randomElement($categories)
        ];
    }
}
