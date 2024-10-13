<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
#[ORM\Entity(repositoryClass: "App\Repository\UserRepository")]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    private string $name;

    #[ORM\Column(type: "string", length: 255, unique: true)]
    private string $username;

    #[ORM\Column(type: "string")]
    private string $password;

    #[ORM\Column(type: "integer")]
    private int $id_cargo;

    // Getters y Setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        return $this;
    }

    public function getIdCargo(): int
    {
        return $this->id_cargo;
    }

    public function setIdCargo(int $id_cargo): self
    {
        $this->id_cargo = $id_cargo;
        return $this;
    }
}
