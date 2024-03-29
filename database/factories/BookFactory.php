<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{

    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'ISBN' => $this->faker->sentence(),
            'author' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->sentence(),
            'category' => $this->faker->randomElement(['accion', 'drama'])
        ];
    }
}
