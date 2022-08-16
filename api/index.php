<?php

include_once './ApiProducto.php';

$api = new ApiProducto();

if (isset($_GET['id'])) {

    $id = $_GET['id'];

    if (is_numeric($id)) {
        $api->getById($id);
    }else{
        $api->error('los parametros son incorrectos');
    }
} else {
    $api->getAll();
}


//para probarlo abrir url localhost/api/?id=27