<?php

namespace App\Controller\App;

use App\Controller\AppController;

class CampaignsController extends AppController
{
    public function index()
    {
        $this->set('title', 'Auto-routed Campaign Page');
    }
}
