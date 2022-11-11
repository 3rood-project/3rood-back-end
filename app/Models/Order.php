<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use App\Models\DeliveryInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function deliveryInfo()
    {
        return $this->hasOne(DeliveryInfo::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('Quantity');
    }
}
