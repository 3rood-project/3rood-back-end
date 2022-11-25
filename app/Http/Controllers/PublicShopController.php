<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Contact;
use App\Models\Category;
use App\Models\NewsLatter;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\public\ShopResource;
use App\Http\Resources\public\ProductResource;
use App\Http\Resources\public\CategoryResource;
use App\Http\Resources\public\SingleShopResource;

class PublicShopController extends Controller
{
    use HttpResponses ;
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

    public function storeContactMessage(Request $request)
    {
        $formData = $request->validate([
            'name'      => 'required|string',
            'email'     => 'required|email',
            'message'   => 'required|string',
        ]);
        Contact::create($formData);
        return $this->success("",'your message send successfully' ,201);
    }
    public function storeNewsLatterMessage(Request $request)
    {
        $formData = $request->validate([
            'email'     => 'required|email|unique:news_latters',
        ]);
        NewsLatter::create($formData);
        return $this->success("",'your message send successfully' ,201);
    }
    public function showProductDetails( $name,$id)
    {
        $shop =Shop::where('shop_name' , $name)->first();
        $product =$shop->products->find($id);
        return new ProductResource($product);
    }
}
