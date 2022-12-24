<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\User;
use App\Models\Product;
use App\Models\DeliveryInfo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory, SoftDeletes ;

    protected $fillable = [
        'user_id',
        'shop_id',
        'delivery_info_id',
        'price',
        'status',
    ];
    public function deliveryInfo()
    {
        return $this->belongsTo(DeliveryInfo::class);
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
