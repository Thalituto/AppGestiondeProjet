<?php

namespace App\Services;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserService implements IUser
{
    public function __construct(private EntityManagerInterface $em,private UserRepository $urepo){
        $this->em = $em;
        $this->urepo=$urepo;
    }

    public function inscription(User $us): User
    {
        $this->em->persist($us);
        $this->em->flush();
        return $us;
    }

    public function authentification(string $lg, string $ps):User
    {

    $us=$this->urepo->findByLogAndPass($lg,$ps);
    return $us;
   
    
    }

    public function users()
    {
        return $this->urepo->users();
    }

}
