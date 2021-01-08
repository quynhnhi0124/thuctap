<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('login');
    }

    public function login(LoginRequest $request){
        $validated = $request->validated();
        $login = [
            'name' => $request -> name,
            'password' => $request -> password,
        ];
        if(Auth::attempt($login)) {
            return view('home');
        }else{
            echo("sai");
        }
    }

//    public function login(Request $request){
//        $user = Users::where('name', $request->name)
//            ->where('password', $request->password)
//            ->first();
//        Auth::login($user);
//        return view('home');
//    }
        public function logout(){
            Auth::logout();
            return redirect('login');
        }
}

