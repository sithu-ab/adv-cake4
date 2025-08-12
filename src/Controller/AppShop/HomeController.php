<?php

namespace App\Controller\AppShop;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function index()
    {
        $this->set('title', 'Home Page');
    }
}
