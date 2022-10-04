<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    function index(){

    }

    function login(Request $req)
    {
        $user =  User::where(['email' =>$req->email])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return 'username/email or password not matched';
        }else{
            //return "hello logged in";
            $req->session()->put('user',$user);
            return redirect('/');
        }
      //  return $req->input();
    } 
}
