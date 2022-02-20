<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LogoutController extends BaseController
{
    public function index()
    {
        session_start();
        unset($_SESSION['uid'],
        $_SESSION['email'],
        $_SESSION['password']
        ) ;
        return redirect()->to('/Home');
    }
}
