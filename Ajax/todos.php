<?php

include_once 'db.php';

class Todos extends Db
{

    public function nuevoTodo($texto)
    {
        if(!empty($texto)){
            $query = $this->connect()->prepare('insert into todotable(texto, completado) values (:texto, 0)');

            $query->execute(['texto' => $texto]);
        }
    }

    public function mostrarTodo()
    {
        return $this->connect()->query('select * from todotable order by timestamp ');
    }
}