<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }

    public function getSignin(){
        return view('user.signin');
    }
    
    public function postSignup(Request $request){
        
        $this->validate($request,[
           'email'=>'email|required|unique:users',
            'password'=>'required|min:4'
        ]);
        
        $user = new User([
            'email'=>$request->input('email'),
            'password'=>bcrypt ($request->input('password'))
        ]);
        $user->save();
        
        return redirect()->route('product.index');
    }
}
