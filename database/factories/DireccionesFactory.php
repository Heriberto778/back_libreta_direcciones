<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Direcciones;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direcciones>
 */
class DireccionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Direcciones::class;
    public function definition(): array
    {
        return [
            'calle' => $this->faker->streetName,
            'numero_exterior' => $this->faker->buildingNumber,
            'numero_interior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->city,
            'codigo_postal' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
            'estado' => $this->faker->state,
            'pais' => $this->faker->country,
        ];
    }
}
