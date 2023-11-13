<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $request){
        $request -> validate(
            [
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
                'password_conf'=>'required|same:password'
            ]
            );
        echo "<pre>";
        print_r($request->all());
        
    }
}
