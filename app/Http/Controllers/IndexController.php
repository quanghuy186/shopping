<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class IndexController extends Controller
{
    public function home(){
        return view('page.home');
    }

    public function login(){
        
        return view('admin.login');
    }

    public function register(){

        return view('admin.register');
    }

    public function formRegister(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        $user = User::create($validatedData);
        return redirect()->route('admin.login');
    }
    
    public function auth(Request $request){
        echo $request->email;
        if(Auth::user() == $request->username){
           
        }
    }
}