<?php

namespace App\Controller\AppShop\Admin;

use App\Controller\AppController;

class StocksController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        // $this->viewBuilder()->setLayout('admin');
    }

    public function index()
    {
        $this->set('title', 'Stock page');
    }
}
