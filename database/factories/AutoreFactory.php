<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autore>
 */
class AutoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' =>$this->faker->firstName($gender = 'Hombre' | 'mujer'),
            'apellidos'=>$this->faker->name($gender = 'Hombre' | 'mujer'),
            'nacionalidad'=>$this->faker->country(),
            'sexo'=>$this->faker->word(),
            'edad'=>$this->faker->numberBetween(18, 82)
        ];
    }
}
