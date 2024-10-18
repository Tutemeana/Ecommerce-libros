<?php

#namespace App\Repository;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    public function findByUsername(string $username)
    {
        return $this->findOneBy(['username' => $username]);
    }
}
