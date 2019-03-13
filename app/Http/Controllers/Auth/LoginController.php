<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use App\User;
use Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    //     $this->middleware('guest', ['except' => 'logout']);
    }

    public function Login(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ], [
            'username.required' => 'Username diperlukan!',
            'username.exists' => 'Username tidak ditemukan',
            'password.required' => 'Password diperlukan'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }
        else {
            if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
                if(Auth::user()->role == 1){
                    return redirect()->intended('admin');
                } elseif(Auth::user()->role == 2){
                    return redirect()->intended('duknis');
                } elseif(Auth::user()->role == 3){
                    return redirect()->intended('pemohon');
                }
            }
            else {
                $validator->errors()->add('password', 'Password salah');
                return redirect('/')
                            ->withErrors($validator)
                            ->withInput();
            }
        }
    }

    public function username()
    {
        return 'username';
    }
}
