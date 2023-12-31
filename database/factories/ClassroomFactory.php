<?php

namespace Database\Factories;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        return [
            'title' => Classroom::$classNames[array_rand(Classroom::$classNames)],
            'opened_at' => fake()->dateTime(),
            'closed_at' => fake()->dateTime(),
            'code' => fake()->text('50'),
        ];
    }
}
