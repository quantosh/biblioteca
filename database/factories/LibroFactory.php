<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'titulo'=>$this->faker->word(3),
          'categoria'=>$this->faker->word(),
          'autor_id'=>$this->faker->numberBetween(1, 20),
          'descripcion'=>$this->faker->text()
        ];
    }
}
