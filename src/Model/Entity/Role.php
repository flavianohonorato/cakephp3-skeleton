<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class Role extends Entity
{
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}