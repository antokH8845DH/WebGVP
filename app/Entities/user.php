<?php

namespace App\Entities;

use CodeIgniter\Entity;

class User extends Entity
{
    public function setPassword(string $pass)
    {
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        $this->attributes['password'] = md5($salt . $pass);

        return $this;
    }
    // public function setProfile($sfile)
    // {
    //     $fileName = $sfile->getRandomName();
    //     $writePath = './profile';
    //     $sfile->move($writePath, $fileName);
    //     $this->attributes['profile'] = $fileName;
    //     return $this;
    // }
}
