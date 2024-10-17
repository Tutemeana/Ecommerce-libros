<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: "user")]
class User
{
    #[ORM\Id, ORM\Column(type:'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type:'string')]
    private string $nombre;
    #[ORM\Column(type:'string')]
    private string $user;
    #[ORM\Column(type:'integer')]
    protected string $password;
    #[ORM\Column(type:'string')]
    private string $role;

    function __construct($nombre, $id, $user, $password, $role)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->user = $user;
        $this->password = $password;
        $this->role = $role;
    }

    function getId()
    {
        return $this->id;
    }

    function getNombre()
    {
        return $this->nombre;
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