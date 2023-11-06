<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;


class StudentFactory extends Factory
{
    
   // protected $model = StudentFactory::class;
    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "lastname" => $this->faker->lastName(),
            "document" => $this->faker->phoneNumber(),
            "hometown" => $this->faker->address(),
            "birth_date" => $this->faker->date("Y-m-d"),
            "school_id" => $this->faker->numberBetween(1,40),
        ];
    }

    function factory()
    {        
        return $this->definition();
    }
}
