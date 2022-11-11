<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryInfo extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->hasOne(Order::class);
    }

}
