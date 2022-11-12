<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryInfo>
 */
class DeliveryInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->unique()->name(),
            'city'=>$this->faker->randomElement(['zarqa','amman','irbid','mafraq']),
            'address'=>fake()->text(),
            'phone_number'=> $this->faker->numerify('##########'),
            'note'=>fake()->text(),
        ];
    }
}
