<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Signup;
use Illuminate\Support\Facades\Hash;

//use App\Models\Users;

class SignupController extends Controller
{
    public function index(){
        return view( 'signup');
    }

    public function store(Signup $request){
        $validated = $request->validated();
        $users = Users::create(([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>Hash::make($request['password'])]));
        return redirect()->to('/home/signup');

    }

    public function message(){
        return [
            'name.required' => "Không được bỏ trống name",
            'name.unique' => "Tên này đã tồn tại",
            'email.required' => "Không bỏ trống password",
        ];
    }
}
