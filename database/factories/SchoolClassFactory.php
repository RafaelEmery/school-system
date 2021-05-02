<?php

namespace Database\Factories;

use App\Models\SchoolClass;
use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolClassFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SchoolClass::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->numerify('Turma ##'),
            'start_date' => $this->faker->dateTimeBetween('-1 years', 'now', null),
            'end_date' => $this->faker->dateTimeBetween('now', '+1 years', null),
        ];
    }
}
