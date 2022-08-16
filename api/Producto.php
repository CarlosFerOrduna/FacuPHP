<?php

include_once './Db.php';

class Producto extends Db {

    function getAll() {
        $query = $this->connect()->query('select * from productos');

        return $query;
    }

    function getById($id) {
        $query = $this->connect()->prepare('select * from productos where id_producto = :id');
        $query->execute(['id' => $id]);

        return $query;
    }

    function save($producto) {
        $query = $this->connect()->prepare('insert into productos (nombre, descripcion, precio, stock, imagen) values (:nombre, :descripcion, :precio, stock, imagen)');
        $query->execute(['nombre' => $producto['nombre']],
                ['descripcion' => $producto['descripcion']],
                ['precio' => $producto['precio']],
                ['stock' => $producto['stock']],
                ['imagen' => $producto['imagen']]);
        return $query;
    }

}
