<?php
namespace App\Controller\App\Admin;

use App\Controller\AppController;

class ApplicationsController extends AppController
{
    public function detail($classroom_id)
    {
        // You can load Models and fetch data here
        $this->set('classroom_id', $classroom_id);
        $this->set('title', 'Application Detail');
    }
}
