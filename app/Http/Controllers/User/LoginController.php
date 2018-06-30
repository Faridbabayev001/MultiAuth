<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     *  Show user login page
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userLogin()
    {
        return view('user.login');
    }

    public function postUserLogin(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email,'password' => $request->password]))
        {
            return redirect(route('userProfile'));
        }
        else {
            return back();
        }
    }
}
