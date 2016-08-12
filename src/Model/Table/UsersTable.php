<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->table('users');

        $this->displayField('name');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);

    }
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('name', 'Campo obrigatório')
            ->notEmpty('email', 'o campo email precisa ser preenchido')
            ->notEmpty('password', 'O campo senha precisa ser preenchido')
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('status');
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['role_id'], 'Roles'));
        return $rules;
    }
}