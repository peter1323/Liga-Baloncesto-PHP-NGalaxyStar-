<html>
<head>
    <style>
         body{
                background-image: url('16.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                color: whitesmoke;
            }
            form{
                justify-content: center;
                width: 100%;
                text-align: center;
                margin-top: 200px;
                 
            }
            .tamaño{
                font-size: 25px;
                color: orangered; 
            }
            h1{
            justify-content: center;
                width: 100%;
                text-align: center;
                margin-top: 10px;  
            }
            .color{
            color: red; 
            }
        </style>
</head>

<body>

    <?php
        // Este if sirve para que nadie pueda entrar sin registrarse
        session_start();

        if (isset($_SESSION['usuario'])==false){ 
            header("location:login.php");
        }
    ?>
    <!-- Este formulario  es una copia clavada al de la página de login-->
    <form method="post" action="validar.php" >
        <h1>Inicie sesión</h1>
            
        <b class="tamaño">Introduzca  Usuario</b>
            <br>
        <input type="text" placeholder="Su nombre" name="usuario">
            <p></p>

        <b class="tamaño">Introduzca contraseña</b>
            <br>
        <input type="password" placeholder="Contraseña" name="contraseña">
            <p></p> 

        <input type="submit" value="enviar">
    </form>

    <h1 class="color">Error al meter el usuario o contraseña</h1>
        <p></p>


</body>
</html>
