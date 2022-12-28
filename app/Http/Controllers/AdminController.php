<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use App\Models\Order;
use App\Models\Contact;
use App\Models\Product;
use App\Traits\UserCheck;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Resources\UserResources;
use App\Http\Resources\public\SingleShopResource;

class AdminController extends Controller
{
    use HttpResponses ,UserCheck;

    public function shopChangeStatus(Request $request,Shop $shop)
    {
        if (!$this->isAdmin()) {
            return $this->error('','you are unauthorized to reach here',403);
        }

        $shop->status = $request->status;
        $shop->save();
        return $this->success('',"shop's Status changed successfully");
    }
    public function changeRole(Request $request,User $user)
    {
        if (!$this->isAdmin()) {
            return $this->error('','you are unauthorized to reach here',403);
        }

        $user->role = $request->role;
        $user->save();
        return $this->success('',"user's role changed successfully");
    }
    public function removeUser(Request $request,User $user)
    {
        if (!$this->isAdmin()) {
            return $this->error('','you are unauthorized to reach here',403);
        }

        $user->delete();

        return $this->success('',"user  deleted successfully");
    }
    public function statistics()
    {

        return $this->isAdmin() ? $this->success([
            'users' => User::all()->count(),
            'approvedShops' => Shop::all()->where('status','approved') ->count(),
            'contact' => Contact::all()->count(),
            'products' => Product::all()->count(),
            'orders' => Order::all()->count(),
            'pendingShops' => Shop::all()->where('status','pending') ->count(),
        ]):$this->error('','you are unauthorized to reach here',403);
    }
    public function shopsRequest()
    {

        return $this->isAdmin() ? $this->success(
             SingleShopResource::collection(Shop::all()->where('status','pending'))

        ):$this->error('','you are unauthorized to reach here',403);
    }
    public function users()
    {

        return $this->isAdmin() ? $this->success([
            'users' => UserResources::collection(User::all())  ,

        ]):$this->error('','you are unauthorized to reach here',403);
    }
}
