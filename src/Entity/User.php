<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class User
{
    protected string $nombre;
    protected int $id;
    protected string $user;
    protected string $password;
    protected string $role;

    function __construct($nombre, $id, $user, $password, $role)
    {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->user = $user;
        $this->password = $password;
        $this->role = $role;
    }

    function getNombre()
    {
        return $this->nombre;
    }

    function getId()
    {
        return $this->id;
    }

    function getUser()
    {
        return $this->user;
    }

    function getRole()
    {
        return $this->role;
    }

    
}