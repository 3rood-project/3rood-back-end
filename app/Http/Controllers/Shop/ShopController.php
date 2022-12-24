<?php

namespace App\Http\Controllers\Shop;

use App\Models\Order;
use App\Models\Product;
use App\Traits\UserCheck;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ShopController extends Controller
{
    use HttpResponses ,UserCheck;

    public function approveOrder(Order $order)
    {
        if (!$this->isShopAuthorized($order) || !$this->isShop()) {
            return $this->error('','you are not unauthorized to reach here',403);
        }
        $order->status = 'approved';
        $order->save();
        return $this->success('','The order approved successfully');
    }

    public function rejectOrder(Order $order)
    {
        if (!$this->isShopAuthorized($order) || !$this->isShop()) {
            return $this->error('','you are not unauthorized to reach here',403);
        }
        $order->status = 'rejected';
        $order->save();
        return $this->success('','The order rejected successfully');
    }

    public function changeOrderStage(Order $order , Request $request)
    {
        if (!$this->isShopAuthorized($order) || !$this->isShop()) {
            return $this->error('','you are not unauthorized to reach here',403);
        }
        // dd($request);
        $order->stage = $request->change_stage;
        $order->save();
        return $this->success([ $request->change_stage],'The order stage change successfully');
    }

    public function editOffer(Product $product, Request $request)
    {
        if (!$this->isShop() || !$this->isShopAuthorized($product)) {
            return  $this->error('','you are not unauthorized to reach here',403);
        }
        $request->validate([
            'product_name'          => 'required|string',
            'product_price'         => 'required|integer',
            'expiration_date'       => 'required|date',
            'product_description'   => 'required|string',
            'product_image'         => 'required',
            'product_Quantity'      => 'required|integer',
            'product_tag'          => 'required|string',
        ]);

        ///------------
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->duo_to = $request->expiration_date;
        $product->Description = $request->product_description;
        $product->product_photo = $request->product_image;
        $product->Quantity = $request->product_Quantity;
        $product->tag = $request->product_tag;
        $product->save();


        return $this->success('','The Offer edited successfully',200);
    }
    public function addNewOffer(Request $request)
    {
        if (!$this->isShop()) {
            return  $this->error('','you are not unauthorized to reach here',403);
        }
        $request->validate([
            'product_name'          => 'required',
            'product_price'         => 'required',
            'expiration_date'       => 'required|date',
            'product_description'   => 'required|string',
            'product_image'         => 'required',
            'product_Quantity'      => 'required',
            'product_tag'          => 'required|string',
        ]);

        // get logged in user
        $shop = Auth::user();
        $newOffer = Product::create([
            'name'               => $request->product_name,
            'price'              => $request->product_price,
            'duo_to'             => $request->expiration_date,
            'Description'        => $request->product_description,
            'product_photo'      => $request->product_image,
            'Quantity'           => $request->product_Quantity,
            'tag'                => $request->product_tag,
            'shop_id'            => $shop->id
        ]);

        return $this->success($newOffer,'The Offer created successfully',201);
    }


    public function deleteOffer(Product $product)
    {
        if (!$this->isShopAuthorized($product) || !$this->isShop()) {
            return $this->error('','you are not unauthorized to reach here',403);
        }
        $product->delete();

        return $this->success('','The offer deleted successfully');
    }
}
