<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Traits\UserCheck;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\OrderResource;
use App\Http\Resources\user\ProfileResource;
use App\Http\Resources\user\EditProfileResource;

class UserProfileController extends Controller
{
    use HttpResponses ,UserCheck;

    public function showUserProfile()
    {
        return $this->isUser() ?  new ProfileResource(Auth::user())
                                : $this->error('','you are unauthorized to reach here',403);
    }
    public function editUserProfile(Request $request)
    {
        if (Auth::user()->role == 'admin' || Auth::user()->shop_name) {
            return $this->error('','you are not unauthorized to reach here',403);
        }
        $formFields = $request->validate([
            'first_name' => ['required', 'string','max:255'],
            'last_name' => ['required', 'string'],
            'city' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'birthday' => ['required', 'date'],
            // 'profile_photo' => ['required', 'string'],
            'phone_number' => ['required', 'min:10'],
        ]);

        Auth::user()->update($formFields);

        return $this->success(new EditProfileResource( Auth::user()),'your information update successfully' );
    }

    public function changeUserPassword(Request $request)
    {
        if (!$this->isUser()) {
            return  $this->error('','you are not unauthorized to reach here',403);
        }
        $formFields = $request->validate([
            'password_current'      => 'required',
            'password' => 'required|confirmed|regex:/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/',
            'password_confirmation' => 'required',
        ],[
            'password.regex' => 'The password should have minimum eight characters,
        at least one letter, one number and one special character'
        ]);

        // get logged in user
        $user = Auth::user();
        // check password current is correct
        $checkPass = Hash::check($request->password_current, $user->password);

        if ($checkPass) {
            //Assign the new password
            $user->password = Hash::make($request->password);
            $user->save();
            return $this->success('','your password update successfully' );
        }
        return $this->error('','incorrect password ',400 );
    }



}
