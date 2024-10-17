<?php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LibroRepository::class)]
#[ORM\Table(name: "libros")]
Class Libro {
    
    #[ORM\Id, ORM\Column(type:'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: 'string')]
    public $titulo;
    #[ORM\Column(type: 'string')]
    public $descripcion;
    #[ORM\Column(type: 'float')]
    public $precio;
    #[ORM\Column(type: 'integer')]
    public $stock;

    function __construct(string $titulo, 
                        string $descripcion, 
                        int $precio, 
                        int $stock = 0)
    {
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    function getID(){
        return $this->id;
    }
    
    function getTitulo(){
        return $this->titulo;
    }

    function getDescripcion(){
        return $this->descripcion;
    }

    function getPrecio(){
        return $this->precio;
    }

    function getStock(){
        return $this->stock;
    }

    function setTitulo($value): void{
        $this->titulo = $value;
    }

    function setDescripcion($value): void{
        $this->descripcion = $value;
    }

    function setPrecio($value): void{
        $this->precio = $value;
    }

    function setStock($value): void{
        $this->stock = $value;
    }
}
