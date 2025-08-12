<?php

namespace App\Controller\App;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function index()
    {
        $this->set('title', 'Home Page');
    }
}
