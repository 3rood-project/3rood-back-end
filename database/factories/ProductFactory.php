<?php

namespace Database\Factories;

use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->unique()->name(),
            'shop_id'=> Shop::all()->random()->id,
            'price'=> $this->faker->numerify('##') ,
            'Description'=> $this->faker->text(),
            'product_photo'=> 'profile photo',
            'tag' =>fake()->unique()->text(),
            'Quantity' => $this->faker->numerify('##'),
            'duo_to' => $this->faker->date(),
        ];
    }
}
