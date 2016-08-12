<?php

use Phinx\Seed\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

    public function run()
    {
        $data = [
            'name'      => 'flaviano',
            'email'         => 'contato@flaviano.com.br',
            'password'      => (new DefaultPasswordHasher)->hash('administrator102030'),
            'status'        => 1, //active status
            'role_id'       => 1, //admin role
            'modified'      => date('Y-m-d H:i:s'),
            'created'       => date('Y-m-d H:i:s'),
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
