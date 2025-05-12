<?php

require_once '../models/Producto.php';

class ProductoController
{
    public function index()
    {
        $producto = new Producto;
        $producto->nombre = 'Producto de ejemplo';

        return $producto;
    }
}
