<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
	 public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('admin');
    }

    public function index()
    {
        $this->set('title_for_layout', 'Usuários');
        $this->viewBuilder()->layout('admin');
        $this->set('users', $this->paginate($this->Users));
        $this->set('_serialize', ['users']);
    }

    public function beforeFilter(Event $event)
    {
        // Allow users to register and logout.
        // You should not add the "login" action to allow list. Doing so would
        // cause problems with normal functioning of AuthComponent.

        // parent::beforeFilter($event);
        $this->Auth->allow(['logout']);
    }

    public function login()
    {
        $this->set('title_for_layout', 'Login');
        $this->viewBuilder()->layout('login');

        // Se houver uma requisicao, verifico se o usuario tem acesso ao sistema
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Username ou password inválidos, tente novamente'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


    public function detalhes($id)
    {
        $this->set('title_for_layout', 'Detalhes do Usuário');
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    // Adicionar
    public function adicionar()
    {
        $this->set('title_for_layout', 'Adicionar Usuário');

        // lists of the roles
        $this->loadModel('Roles');
        $roles = $this->Roles->find('list', [
            'keyField' => 'id',
            'valueField' => 'role'
        ]);
        $this->set(compact( 'roles'));
        
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário adicionado com sucesso.', ['class' => 'alert alert-info']);
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não foi possível adicionar este usuário, por favor tente novamente.'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('roles'));
        $this->set('user', $user);
    }

    // Editar
    public function editar($id = null)
    {
        $this->set('title_for_layout', 'Editar Usuário');
        
        $this->loadModel('Roles');
        $roles = $this->Roles->find('list', [
            'keyField' => 'id',
            'valueField' => 'role'
        ]);
        $this->set(compact('roles'));

        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success('Usuário editado com sucesso.', ['class' => 'alert alert-info']);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Eu ao editar usuário. Por favor, tente novamente.'));
            }
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        if (empty($user)) {
            throw new Exception("Usuário não encontrado");
        } else {
            $this->set(compact('user', 'roles'));
            $this->set('_serialize', ['user']);
        }
    }


    // Deletar
    public function delete($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('Usuário deletado com sucesso.', ['class' => 'alert alert-info']);
        } else {
            $this->Flash->error(__('Eu ao deletar. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }

}