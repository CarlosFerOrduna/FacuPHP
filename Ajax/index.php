<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div id="main-container">
    <form action="" id="nuevo-pendiente-container" method="post">
            <label for="todo">Que hacer?</label>
            <input type="text" name="todo" id="todo">
        <p>
            <input type="button" id="bEnviar" value="Añadir todo">
        </p>
    </form>
    <div id="mostrar-todo-container">
    </div>
</div>

<script src="main.js"></script>
<script>
    cargarTodos();
</script>
</body>
</html>