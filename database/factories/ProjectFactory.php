<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '), // transforma em array e junta com espaço
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(
                ['react', 'php', 'laravel', 'vue', 'tailwind', 'js', 'nextjs', 'python'], 
                random_int(1, 5)), // isso vai fazer escolher de 1 a 5 elementos do array de stacks
            'created_by' => User::factory(),
        ];
    }
}
