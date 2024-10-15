<?php

Class Libro {
    
    public $ID_Libro;
    public $titulo;
    public $descripcion;
    public $precio;
    public $stock;

    function __construct(INT $ID_Libro, string $titulo, 
        string $descripcion, int $precio, int $stock = 0)
    {
        $this->ID_Libro = $ID_Libro;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    function getID(){
        return $this->ID_Libro;
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
