<?php

namespace Database\Factories;

use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SchoolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = School::class;
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "address"=>$this->faker->address(),
            "code_shool"=>$this->faker->postcode(),
            "postal_code"=>$this->faker->postcode(),
            "email"=>$this->faker->email(),
            "phone"=>$this->faker->phoneNumber(),
            "phone2"=>$this->faker->phoneNumber(),
            "city"=>$this->faker->city(),
            "country"=> $this->faker->country(),
            "logo"=>$this->faker->url()
          ];
    }

    function factory()
    {
        $school = SchoolFactory::definition();
        return $school;
    }
}
