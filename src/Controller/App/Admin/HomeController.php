<?php

namespace App\Controller\App\Admin;

use App\Controller\AppController;

class HomeController extends AppController
{
    public function index()
    {
        $this->set('title', 'Admin Home');
    }
}

