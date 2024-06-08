<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Emails;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emails>
 */
class EmailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Emails::class;
    public function definition(): array
    {
        return [
            'email' => $this->faker->email,
        ];
    }
}
