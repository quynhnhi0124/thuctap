<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Users;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
