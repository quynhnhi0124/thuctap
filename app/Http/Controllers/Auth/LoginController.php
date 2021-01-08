<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;

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

        if(Auth::attempt($login)){
            console.log("thanh cong");
            return redirect('/login');
        }else{
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }
    public function logout(){
        Auth::logout();
    }
}
