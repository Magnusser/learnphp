<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function registerFomr(){
        view('auth/register');
    }

    public function register(){
        $user = User::where('email', $_POST['email']);
        if(count($user) === 0 && $_POST['password'] === $_POST['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password = $_POST['password'];
            $user->save();
            redirect('/');
        } else {
            redirect('/register');
        }
    }

    public function loginForm(){

    }

    public function login(){

    }

    public function logout(){

    }
}