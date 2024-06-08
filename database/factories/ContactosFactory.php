<?php

namespace Database\Factories;
use App\Models\Contactos;
use App\Models\Direcciones;
use App\Models\Emails;
use App\Models\Telefonos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contactos>
 */
class ContactosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Contactos::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido_paterno' => $this->faker->lastName,
            'apellido_materno' => $this->faker->lastName,
        ];
    }

    public function withRelated()
    {
        return $this->has(Direcciones::factory()->count(2), 'direcciones')
                    ->has(Emails::factory()->count(2), 'emails')
                    ->has(Telefonos::factory()->count(2), 'telefonos');
    }
}
