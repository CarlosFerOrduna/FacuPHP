<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div id="menu">
            <ul>
                <li>Home</li>
                <li class="cerrar-sesion"><a href="includes/logout.php">Cerrar sesión</a></li>
            </ul>

            <section>
                <h1>Bienvenido <?php echo $user->getNombre();?></h1>
            </section>
        </div>
    </body>
</html>
