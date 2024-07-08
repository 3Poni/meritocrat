<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vacancy>
 */
class VacancyFactory extends Factory
{
    protected $model = Vacancy::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => 'Названи вакансии',
            'type' => $this->faker->randomElement([
                'Удаленная',
                'Гибрид',
                'В офисе',
            ]),
            'salary' => $this->faker->randomElement([
                'До ',
                'От ',
                ' ',
            ]) . $this->faker->numberBetween(10, 100) . ' тыс. рублей',
            'requirements' => fake()->sentence('10') . "<br><br>"
                . fake()->sentence('10') . "<br><br>"
                . fake()->sentence('6') . "<br><br>"
                . fake()->sentence('13') . "<br><br>"
                . fake()->sentence('12') . "<br><br>"
                . fake()->sentence('10') . "<br><br>",
            'description' => fake()->sentence('10') . "<br><br>"
                . fake()->sentence('10') . "<br><br>"
                . fake()->sentence('7') . "<br><br>"
                . fake()->sentence('10') . "<br><br>",
        ];
    }
}
