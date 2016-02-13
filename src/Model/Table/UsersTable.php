<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('first_name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
    }


    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'Campo obrigatório')
            ->notEmpty('first_name', 'Campo obrigatório')
            ->notEmpty('last_name', 'Campo obrigatório')
            ->notEmpty('email', 'O Campo email precisa ser preenchido')
            ->notEmpty('password', 'O campo senbha precisa ser preenchido')
            ->notEmpty('perfil', 'O campo perfil precisa ser preenchido')
            ->add('perfil', 'inList', [
               'rule'   =>  ['inList', ['admin', 'user']],
                'message'   =>  'Selecione um Perfil'
            ]);
    }

}