<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shop_name' => $this->faker->unique()->name(),
            'email'=>fake()->unique()->safeEmail(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password,
            'city' => $this->faker->text(),
            'phone_number' => $this->faker->numerify('##########') ,
            'wallet_account' => $this->faker->numerify('##########') ,
            'address' => $this->faker->text(),
            'category_id' => Category::all()->random()->id,
            'open_time' => '8:00',
            'close_time' => '20:00',
            'profile_photo'=> 'profil`e photo'
        ];
    }
}
