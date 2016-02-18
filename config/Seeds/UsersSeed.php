<?php

use Phinx\Seed\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    public function run()
    {
        $data = [
            'username'      => 'admin',
            'first_name'    => 'Jane',
            'last_name'     => 'Doe',
            'email'         => 'jane@doe.com',
            'password'      => sha1('admin'),
            'created'       => date('Y-m-d H:i:s'),
            'perfil'        => 'admin'
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
