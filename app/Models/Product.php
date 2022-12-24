<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'shop_id',
        'price',
        'Description',
        'product_photo',
        'tag',
        'Quantity',
        'duo_to',
    ];
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('Quantity');
    }
}
