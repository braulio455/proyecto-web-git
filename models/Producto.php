<?php

class Producto
{
    public $nombre;

    public $precio;

    public $descripcion;

    public $categoria;

    public function __construct($nombre, $precio, $descripcion, $categoria)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->categoria = $categoria;
    }

    public function mostrarDetalles()
    {
        return 'Nombre: '.$this->nombre.', Precio: '.$this->precio.', Descripción: '.$this->descripcion.', Categoría: '.$this->categoria;
    }
}
