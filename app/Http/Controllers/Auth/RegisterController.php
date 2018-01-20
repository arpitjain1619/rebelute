<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controllerz
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    public function index()
    {
        return view('register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(RegisterRequest $request)
    {
        $is_user_exist = User::where('email', $request['email'])->first();

        if($is_user_exist) {
            return redirect()
            ->route('register')
            ->with([
                'flash_level' => 'danger',
                'flash_message' => 'This email is already registered with us. Please login.'
            ]);
        }

        $user =  User::create([
            'name' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['contact']
        ]);

        Auth::attempt(['email'=> $user->email, 'password' => $request['password']]);
        return redirect()->route('user.get.profile');
    }
}
