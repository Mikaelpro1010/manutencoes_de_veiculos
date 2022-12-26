<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Veiculo>
 */
class VeiculoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'nome' => $this->faker->name,
                'cpf' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'placa_do_veiculo' => $this->faker->numberBetween($min = 1000, $max = 9000),
                'telefone' => $this->faker->phoneNumber,
        ];
    }
}
