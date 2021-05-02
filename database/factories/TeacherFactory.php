<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'document_type' => $this->faker->numberBetween(1,2),
            'document' => $this->faker->unique()->randomNumber(9, true),
            'birthday_date' => $this->faker->dateTimeBetween('-70 years', '-22 years', null),
            'highest_degree' => $this->faker->randomElements(['Ensino Médio', 'Ensino Técnico', 'Ensino Superior', 'Especialização', 'Mestrado', 'Doutorado', 'Pós-doutorado'])[0],
            'school_class_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
