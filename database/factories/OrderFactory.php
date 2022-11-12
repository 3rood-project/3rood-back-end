<?php

namespace Database\Factories;

use App\Models\Shop;
use App\Models\User;
use App\Models\DeliveryInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'=> User::all()->random()->id,
            'shop_id'=> Shop::all()->random()->id,
            'delivery_info_id'=> DeliveryInfo::all()->random()->id->unique(),
            'price'=> $this->faker->numerify('###') ,
            'status'=>$this->faker->randomElement(['pending','approved','rejected']),
        ];;
    }
}
