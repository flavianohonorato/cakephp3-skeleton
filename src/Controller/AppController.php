<?php

namespace App\Controller;

use App\Controller\Admin\Users;
use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'authError' =>  'Você deve estar logado para ter acesso a esta página.',

            'authorize' => ['Controller'],

            'loginRedirect' => [
                'controller' => 'Dashboard',
                'action' => 'index'
            ],

            'unauthorizeRedirect' => [
                'controller' => 'Home',
                'action' => 'index',
                'prefix' => false
            ],

            'logoutRedirect' => [
                'prefix' => 'admin',
                'controller' => 'Users',
                'action' => 'login'
            ],

            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'prefix' => 'admin'
            ]
        ]);
        $this->set('current_user', $this->Auth->user());
    }


    public function isAuthorized($user)
    {
        // Admin can access every action
        if (isset($user['perfil']) && $user['perfil'] === 'admin' || $user['perfil'] === 'user') {
            return true;
        }

        // Default deny
        return false;
    }

    public function beforeFilter(Event $event)
    {
         //$this->Auth->allow();
    }
}
