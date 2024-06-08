<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Telefonos;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Telefonos>
 */
class TelefonosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Telefonos::class;
    public function definition(): array
    {
        return [
            'telefono' => $this->faker->phoneNumber,
        ];
    }
}
