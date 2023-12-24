<?php

namespace App\Services;

use App\Entity\User;

interface IUser
{
    public function inscription(User $u):User;
    public function authentification(String $lg,String $ps):User;
    public function users();

}
