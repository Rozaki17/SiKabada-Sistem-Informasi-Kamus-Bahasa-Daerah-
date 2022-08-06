<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store (Request $request){
        return ($request->all());
    }

    public function login(){

    }

    public function logout(){}

    public function updateProfile(Request $request){}
}
