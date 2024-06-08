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
            'direccion' => $this->faker->address(),
        ];
    }
}
