<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\Signup;
//use App\Models\Users;

class SignupController extends Controller
{
    public function index(){
        return view( 'welcome');
    }

    public function store(Signup $request){
        $validated = $request->validated();
        $users = Users::create(request(['name','email','password']));
        return redirect()->to('/home');

    }

    public function message(){
        return [
            'name.required' => "Không được bỏ trống name",
            'name.unique' => "Tên này đã tồn tại",
            'email.required' => "Không bỏ trống password",
        ];
    }
}
