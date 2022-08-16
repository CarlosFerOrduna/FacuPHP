<?php
include_once 'todos.php';

$todos = new Todos();

$lista = $todos->mostrarTodo();

foreach ($lista as $todo) {
    echo '<div class="pendiente">' . $todo['texto'] . '</div>';
}
