<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manutencao>
 */
class ManutencaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'manutencao' => $this->faker->text,
            'dia_da_manutencao' => $this->faker->dayOfWeek($max = 'now'),
            'marca' => $this->faker->name,
            'modelo' => $this->faker->name,
            'versao' => $this->faker->name,
        ];
    }
}
