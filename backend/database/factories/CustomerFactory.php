<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker = \Faker\Factory::create('es_ES');
        return [
            'Nombre' => $this->faker->firstName(),
            'Apellido' => $this->faker->lastName(),
            'tlf' => $this->faker->phoneNumber(),
            'ciudad' => $this->faker->city(),
            'pais' => $this->faker->country()
        ];
    }
}
