<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        
        //echo("jsdjk;l");
        return view("LoginView");
        //return view("Log");
    }
    public function login()
    {
        $user = new userModel();
        $email = $this->request->getPost("email");
        $password = $this->request->getPost("password");
        $checkUser = $user->where('email', $email)->findAll();
        $cnt = count($checkUser);
        if ($cnt == 1) {
            if ($checkUser[0]['password'] == md5("" . $password)) {
                session_start();
                $_SESSION['uid']=$checkUser[0]['uid'];
                $_SESSION['email']=$checkUser[0]['email'];
                $_SESSION['password']=$checkUser[0]['password'];
                return redirect()->to(base_url("/Home"));
                echo "Login Successful";
                //return view('HomeView');
            } else {
                return redirect()->to(base_url("/LoginController"))->with('status', 'Incorrect Email or Password!');
                echo "Incorrect Password";
            }
        } else {
            
            return redirect()->to(base_url("/LoginController"))->with('status', 'Incorrect Email or Password!');
            echo "Incorrect Email";
        }
        echo "<br>";
    }
}
