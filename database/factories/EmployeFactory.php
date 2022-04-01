<?php

namespace Database\Factories;
use App\Models\Employe;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{

 /**
     * Define the model's default state.
     *
     * @return string
     */

     protected $model = Employe::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'registration_number' => $this->faker->randomDigit(),
            'fullname' => $this->faker->name(),
            'depart' => $this->faker->word(),
            'hired_date' => $this->faker->date(),
            'phone' => $this->faker->numberBetween(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),

        ];
    }
}
