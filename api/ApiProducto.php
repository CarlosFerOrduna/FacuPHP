<?php

include_once './Producto.php';

class ApiProducto {

    function getAll() {
        $producto = new Producto();
        $preoductos = array();
        $preoductos['items'] = array();

        $respuesta = $producto->getAll();

        if ($respuesta->rowCount()) {
            while ($row = $respuesta->fetch(PDO::FETCH_ASSOC)) {
                $item = array(
                    'id' => $row['id_producto'],
                    'nombre' => $row['nombre'],
                    'descripcion' => $row['descripcion']
                );

                array_push($preoductos['items'], $item);
            }

            $this->printJson($preoductos);
        } else {
            $this->error('no hay elementos generados');
        }
    }

    function getById($id) {
        $producto = new Producto();
        $preoductos = array();
        $preoductos['items'] = array();

        $respuesta = $producto->getById($id);

        if ($respuesta->rowCount() == 1) {

            $row = $respuesta->fetch();
            $item = array(
                'id' => $row['id_producto'],
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion']
            );

            array_push($preoductos['items'], $item);

            $this->printJson($preoductos);
        } else {
            $this->error('no hay elementos generados');
        }
    }
    
    function save($item){
        $producto = new Producto();
        
        $resultado = $producto->save($item);
        $this->exito('Nueva pelicula registrada');
    }
    
    function exito($message){
        echo json_encode(array('mensaje' => $message));
    }

    function printJson($array) {
        echo '<code>' . json_encode($array) . '</code>';
    }

    function error($message) {
        echo '<code>' . json_encode(array('message' => $message)) . '</code>';
    }

    function isOk(){
        
    }
}
