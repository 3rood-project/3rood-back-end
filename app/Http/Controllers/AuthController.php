<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\UserResources;
use Illuminate\Validation\Rules\Password;
use App\Http\Resources\public\ShopResource;

class AuthController extends Controller
{
    use HttpResponses;
    public function userLogin(Request $request)
    {
            $formFields = $request->validate([
            'email' => ['required','string', 'email'],
            'password' => 'required|string'
        ]);

        if(!Auth::attempt($formFields)){
            return $this->error('','email or password is invalid' , 401);
        }
        $user = User::where("email" , $formFields['email'])->first();

        return $this->success([
            'user' => new UserResources($user),
            'token' =>$user->createToken('API Token of ' . $user->name)->plainTextToken //for return only plainTextToken without it will return all token record from personal_access_tokens
        ]);

    }
    public function shopLogin(Request $request)
    {
            $formFields = $request->validate([
            'email' => ['required','string', 'email'],
            'password' => 'required|string|min:8'
        ]);

        if(!Auth::guard('shop')->attempt($formFields)){
            return $this->error('','email or password is invalid' , 401);
        }
        $shop = Shop::where("email" , $formFields['email'])->first();

        return $this->success([
            'shop' => new ShopResource($shop),
            'token' =>$shop->createToken('API Token of ' . $shop->name)->plainTextToken //for return only plainTextToken without it will return all token record from personal_access_tokens
        ]);

    }

    public function userRegister(Request $request)
    {
        $formFields = $request->validate(
            [
                'first_name' => ['required', 'string','max:255'],
                'last_name' => ['required', 'string'],
                'city' => ['required', 'string'],
                'gender' => ['required', 'string'],
                // 'profile_photo' => ['required', 'string'],
                'birthday' => ['required', 'date'],
                'email' => ['required', 'email', 'unique:users'],
                'phone_number' => ['required', 'min:10'],
                'password' => ['required','confirmed',Password::defaults()
            ],
            ],

        );
                // Hash Password
                $formFields['password'] = Hash::make($formFields['password']);

                // Create user
                $user = User::create($formFields);
        return $this->success([
            'user' => new UserResources($user),
            'token' =>$user->createToken('API Token of ' . $user->name)->plainTextToken //for return only plainTextToken without it will return all token record from personal_access_tokens
        ]);
    }
    public function shopRegister(Request $request)
    {
        $formFields = $request->validate(
            [
                'shop_name' => ['required', 'string','max:255'],
                'city' => ['required', 'string'],
                'address' => ['required', 'string'],
                'email' => ['required', 'email', 'unique:users'],
                'phone_number' => ['required', 'min:10' ],
                'wallet_account' => ['required', 'min:10'],
                'open_time' => ['required'],
                'category_id' => ['required'],
                'close_time' => ['required'],
                'profile_photo' => ['required'],
                'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            ],
            [
                'password.regex' => 'The password should have minimum eight characters,
            at least one letter, one number and one special character'
            ]
        );
                // Hash Password
                $formFields['password'] = Hash::make($formFields['password']);

                // Create user
                $shop = Shop::create($formFields);
        return $this->success([
            'Shop' =>  new ShopResource($shop),
            'token' =>$shop->createToken('API Token of ' . $shop->name)->plainTextToken //for return only plainTextToken without it will return all token record from personal_access_tokens
        ]);
    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();
        return $this->success([
            'message' => 'your access token has been deleted successfully'
        ]);
    }

}
