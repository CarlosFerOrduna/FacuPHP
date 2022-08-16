<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <form action="" method="post">

            <?php
            if (isset($errorLogin)) {
                echo $errorLogin;
            }
            ?>
            <h2>Iniciar secion</h2>
            <p>Nombre de usuario:<br>
                <input type="text" name="username"></p>
            <p>Password<br>
                <input type="password" name="password"></p>
            <p class="center"><input type="submit" value="Iniciar sesión"></p>


        </form>
    </body>
</html>
