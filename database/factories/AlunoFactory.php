<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //Insere dados nas colunas da tabela Aluno

            'nome'=> $this->faker->name(),
            'dtNascto'=> $this->faker->date('Y-m-d','2010-12-31'),
            'telefone'=> $this->faker->e164PhoneNumber(),
            'responsavel'=> $this->faker->name(),
            'turma' => $this->faker->words()
        ];
    }
}
