<?php

namespace controller;

use core\Application;
use core\Controller;
use core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 't0b1'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return "Handling submitted data";
    }
}