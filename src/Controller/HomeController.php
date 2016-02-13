<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Home Controller
 */

class HomeController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('front');
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'detalhes']);
    }


    /**
     * Index method
     */
    public function index()
    {
        $this->set('title_for_layout', 'Cakephp3 Skeleton');

    }
}
