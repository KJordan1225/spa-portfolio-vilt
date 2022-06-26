<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Project;

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
    public function definition()
    {
        $textColor = $this->faker->randomElement(Project::getAvailableTextColors());
        $iconName = $this->faker->randomElement(Project::getAvailableIconNames());

        return [
            'title' => $this->faker->unique()->word(2, true),
            'description' => $this->faker->sentence(),
            'color' => $textColor,
            'icon_name' => $iconName,
        ];
    }
}
