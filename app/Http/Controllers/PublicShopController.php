<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\public\ShopResource;
use App\Http\Resources\public\ProductResource;
use App\Http\Resources\public\CategoryResource;
use App\Http\Resources\public\SingleShopResource;

class PublicShopController extends Controller
{
    public function getAllShops(Request $request)
    {
        return ShopResource::collection(Shop::all());
    }
    public function getAllCategories(Request $request)
    {
        return CategoryResource::collection(Category::all());
    }
    public function getShop($name)
    {
        return new SingleShopResource(Shop::where('shop_name' , $name)->first());
    }
    public function showProductDetails( $name,$id)
    {
        $shop =Shop::where('shop_name' , $name)->first();
        $product =$shop->products->find($id);
        return new ProductResource($product);
    }
}
