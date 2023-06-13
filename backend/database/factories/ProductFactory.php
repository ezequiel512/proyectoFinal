<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            //Que me genere nombre de productos aleatorios
            'nombre' => $this->faker->name(),
            'precio' => '14.02',
            'imagen' => 'https://m.media-amazon.com/images/I/61PAb2WeraL._AC_SY355_.jpg',
            'descripcion' => 'Descripción del producto',
        ];
    }
}
