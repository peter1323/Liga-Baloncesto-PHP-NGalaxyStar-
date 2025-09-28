<html>
<head>
</head>

<body>
    
    <?php
        // Este if sirve para que nadie pueda entrar sin registrarse
        session_start();

        if (isset($_SESSION['usuario'])==false){ 
            header("location:login.php");
        } else {
        //Este else lo que hace es destruir la sesión y cargar la página de login,pero en la propia página de cerrar sesión sin redirigirte a la pagina de login
            session_destroy();
            include("login.php");
        }
    ?>

</body>

</html>