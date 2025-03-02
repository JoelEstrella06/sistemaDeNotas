<?php

namespace Database\Factories;

use App\Models\Trabajo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trabajo>
 */
class TrabajoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Trabajo::class;
    public function definition(): array
    {
        return [
            'title'=>fake('es_ES')->text(100),
            'precio'=>fake()->numberBetween(1,999999),
        ];
    }
}
