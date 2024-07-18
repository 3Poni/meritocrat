<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'header' => 'Названи проекта',
            'description' => fake()->text(),
            'ext_description' => fake()->text(200),
            'client' => fake()->company(),
            'service_id' => fake()->numberBetween(16, 29),
            'img' => '../img/project_img-1.png',
        ];
    }
}
