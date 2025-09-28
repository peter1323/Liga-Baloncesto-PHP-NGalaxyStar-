<html>
<head>
    <style>
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
        if (isset($_SESSION['usuario'])==false){ 
                include("login.php");
            }

        // Se recogen los datos del formulario de login
        $usuario=$_POST['usuario'];
        $contraseña=$_POST['contraseña'];

        session_start();
        $_SESSION['usuario']=$usuario;

        //Se conecta con la base de datos en mi caso NGALAXYSTAR
        $conection=mysqli_connect("localhost","root","","ngalaxystar");

        //La consulta que queremos que haga a la base de datos y como queremos que la utilice
        $consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'"; 
        $resultado=mysqli_query($conection,$consulta);

        $filas=mysqli_num_rows($resultado);

        //Este if lo que hace es mandarte al panel de control o menu si estas bien registrado o sino te manda a una pagina que te pone error al hacer login
        if($filas){
            header("location:panel.php");

        }else{
    
            header("location:errorlogin.php");
            
        }

        mysqli_free_result($resultado);
        mysqli_close($conection);
    ?>

</body>
</html>