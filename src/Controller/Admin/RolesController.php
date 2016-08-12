<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
use Cake\Utility\Inflector;

class RolesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Paginator');
        $this->viewBuilder()->layout('admin');
    }


     // INDEX METHOD
    public function index()
    {
        $this->set('title_for_layout', 'Perfil');
        $this->set('roles', $this->paginate($this->Roles));
        $this->set('_serialize', ['roles']);
    }

   // VIEW
    public function detalhes($id = null)
    {
        $role = $this->Roles->get($id, [
            'contain' => []
        ]);
        $this->set('role', $role);
        $this->set('_serialize', ['role']);

        $this->set('title_for_layout', $role->name);
    }

    // ADD
    public function adicionar()
    {
        $this->set('title_for_layout', 'Adicionar Perfil');
        $role = $this->Roles->newEntity();
        $role = $this->Roles->patchEntity($role, $this->request->data);
        if ($this->request->is('post')) {

            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Perfil adicionado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Eu ao cadastrar perfil. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);
    }

    // EDIT
    public function editar($id = null)
    {
        $this->set('title_for_layout', 'Editar Perfil');
        $role = $this->Roles->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $role = $this->Roles->patchEntity($role, $this->request->data);
            if ($this->Roles->save($role)) {
                $this->Flash->success(__('Perfil editado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Eu ao editar este perfil. Por favor, tente novamente.'));
            }
        }
        $this->set(compact('role'));
        $this->set('_serialize', ['role']);
    }

    // DELETE
    public function delete($id = null)
    {
        $role = $this->Roles->get($id);
        if ($this->Roles->delete($role)) {
            $this->Flash->success(__('Perfil removido com sucesso.'));
        } else {
            $this->Flash->error(__('Eu ao deletar este perfil. Por favor, tente novamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}