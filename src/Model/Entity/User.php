<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;


class User extends Entity
{

    protected $_accessible = [
        'id'            =>  false,
        'username'      =>  true,
        'first_name'    =>  true,
        'last_name'     =>  true,
        'email'         =>  true,
        'password'      =>  true,
        'perfil'        =>  true,
    ];

    protected function _setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }
}