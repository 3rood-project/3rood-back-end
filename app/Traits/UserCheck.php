<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait UserCheck {
    protected function isUser(){
        return (Auth::user()->role == 'admin' || Auth::user()->shop_name) ? false : true;
    }
    protected function isAdmin(){
        return (Auth::user()->role == 'admin'  ) ? true : false;
    }
    protected function isShop(){
        return (Auth::user()->role == 'user' || Auth::user()->role == 'admin') ? false : true;
    }

    protected function isAuthorized($order){
        return  Auth::user()->id == $order->user_id ? true:false;
    }
    protected function isShopAuthorized($order){
        return  Auth::user()->id == $order->shop_id  ? true : false;
    }
}
