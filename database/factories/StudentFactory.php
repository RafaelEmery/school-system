<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'enrollment_number' => $this->faker->unique()->randomNumber(9, true),
            'document_type' => $this->faker->numberBetween(1,2),
            'document' => $this->faker->unique()->randomNumber(9, true),
            'birthday_date' => $this->faker->dateTimeBetween('-18 years', '-13 years', null),
            'school_class_id' => $this->faker->numberBetween(1,5),
        ];
    }
}
