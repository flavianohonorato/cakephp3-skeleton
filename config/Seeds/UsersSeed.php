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
            'username'      => 'flaviano',
            'first_name'    => 'Flaviano',
            'last_name'     => 'Honorato',
            'email'         => 'contato@flaviano.com.br',
            'password'      => (new DefaultPasswordHasher)->hash('admin'),
            'created'       => date('Y-m-d H:i:s'),
            'modified'      => date('Y-m-d H:i:s'),
            'perfil'        => 'admin'
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
