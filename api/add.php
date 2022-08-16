<?php

require_once './ApiProducto.php';

$api = new ApiProducto();

if (isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['stock']) && isset($_FILES['imagen'])) {
    if($api->isOk($_FILES['imagen'])){
        $item = array(
            'nombre' => $_POST['nombre'],
            'descripcion' => $_POST['descripcion'],
            'precio' => $_POST['precio'],
            'stock' => $_POST['stock'],
            'imagen' => $api->getName(),
        );
        
        $api->save($item);
    }
} else {
    $api->error('Error al llamar api');
}