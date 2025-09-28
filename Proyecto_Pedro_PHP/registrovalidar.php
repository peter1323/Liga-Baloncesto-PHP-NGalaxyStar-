<html>
    <head>
        <style>
        .color{
            color: red; 
        }
        </style>
    </head>
    
<body>

    <?php

        // Este if sirve para que nadie pueda entrar sin registrarse

        if (isset($_SESSION['usuario'])==false){ 
            header("location:login.php");
        }
        //Para conectarse a la base de datos
            $conection=mysqli_connect("localhost","root","","ngalaxystar");

        //recoge los datos del formulario de registro
            $nombre=$_POST['presidente'];
            $contraseña=$_POST['password'];

        //La consulta para insertar en la tabla usuarios los datos del registro
            $consulta="INSERT INTO usuarios( usuario, contraseña) 
            VALUES ('$nombre','$contraseña')";

        //Lo que pasa si se registra con exito
            $resultado=mysqli_query($conection,$consulta);

                echo "".header("location:login.php")."";

            mysqli_close($conection);
    ?>   

</body>
</html>