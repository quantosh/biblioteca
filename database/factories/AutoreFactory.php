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

        $gender = $this->faker->randomElement(['Hombre', 'Mujer']);
        return [


            'nombre' =>$this->faker->firstName($gender ),
            'apellidos'=>$this->faker->name($gender ),
            'nacionalidad'=>$this->faker->country(),
            'sexo'=>$gender,
            'edad'=>$this->faker->numberBetween(18, 82)
        ];
    }
}
