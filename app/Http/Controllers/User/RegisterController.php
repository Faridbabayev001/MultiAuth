<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\UserRegisterRequest;
use App\Http\Controllers\Controller;
use App\User;

class RegisterController extends Controller
{
    /**
     *  Show user register page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userRegister()
    {
        return view('user.register');
    }

    public function postRegisterUser(UserRegisterRequest $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'is_admin' => '0',
            'password' => bcrypt($request->password),
        ]);
       return redirect('/');
    }
}
