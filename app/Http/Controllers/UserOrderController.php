<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Traits\UserCheck;
use App\Models\DeliveryInfo;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\OrderResource;

class UserOrderController extends Controller
{
    use HttpResponses ,UserCheck;

    public function showUserOrderDetails(Order $order)
    {
       if(Auth::user()->id === $order->user->id || Auth::user()->id ===$order->shop->id ){
        return new OrderResource($order);
       }else return $this->error('','you are not unauthorized to reach this order',403);
    }

    public function placeOrder(Request $request)
    {
        $orderDeliveryInfo = DeliveryInfo::create($request->deliveryInfo);

        $newOrder = Order::create([
            'user_id' => Auth::user()->id,
            'shop_id' => $request->orderInfo['shopId'] ,
            'delivery_info_id' => $orderDeliveryInfo->id,
            'price' => $request->orderInfo['total']
        ]);

        foreach ($request->productsForOrder as  $product) {
            DB::table('orders_product')->insert([
                'order_id' => $newOrder->id,
                'product_id' => $product['productId'],
                'Quantity' => $product["quantity"]
            ]);
        }

        return $this->success( new OrderResource($newOrder),'order created successfully',201);
    }
}
