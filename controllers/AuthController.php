<?php

namespace controller;

use core\Controller;
use core\Request;
use model\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request) 
    {
        $registerModel = new RegisterModel();
        if($request->isPost())
        {
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register())
            {
                return 'Success';
            }
            $this->setLayout('auth');
            return $this->render('register', [
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}