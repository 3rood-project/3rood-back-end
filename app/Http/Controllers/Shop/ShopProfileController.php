<?php

namespace App\Http\Controllers\Shop;

use App\Models\Shop;
use App\Traits\UserCheck;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\Shop\ShopProfileResource;

class ShopProfileController extends Controller
{
    use HttpResponses ,UserCheck;

    public function changeShopPassword(Request $request)
    {
        if (!$this->isShop()) {
            return  $this->error('','you are not unauthorized to reach here',403);
        }
        $request->validate([
            'password_current'      => 'required',
            'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'password_confirmation' => 'required',
        ],[
            'password.regex' => 'The password should have min 8 characters, at least one letter, one number and one special character'
        ]);

        // get logged in user
        $shop = Auth::user();
        // check password current is correct
        $checkPass = Hash::check($request->password_current, $shop->password);

        if ($checkPass) {
            //Assign the new password
            $shop->password = Hash::make($request->password);
            $shop->save();
            return $this->success('','your password update successfully' );
        }
        return $this->error('','incorrect password ',400 );
    }

    public function viewShopProfile(Shop $shop)
    {
    return !$this->isShop() || Auth::user()->id == $shop->id ? new ShopProfileResource(Auth::user()): $this->error('','you are unauthorized to reach here',403);
    }
}
