<?php

namespace controller;

use core\Controller;
use core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request) 
    {
        $this->setLayout('auth');
        if($request->isPost())
        {
            return 'Handle submitted data';
        }
        return $this->render('register');
    }
}