<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function index(){
        return view('login');
    }
    public function authenticate(Request $requuest){
        if(Auth::attempt(['username' => $requuest->username,'password'=> $requuest->password])){
            return view('welcome');
        }
    }
}
