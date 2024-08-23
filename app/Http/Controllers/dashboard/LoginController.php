<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\adminvalidate;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("dashboard.auth.login");
    }
    public function postlogin(adminvalidate $req){
        $remember_me = $req->has('remember_me')? true : false;
        if(auth()->guard('admins')->attempt(['email'=>$req->input('email'),'password'=>$req->input('password')],$remember_me)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->with(['error'=>'There is an error in the data']);
        }





}
}
