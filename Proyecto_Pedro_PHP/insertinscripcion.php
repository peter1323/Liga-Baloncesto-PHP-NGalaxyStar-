<html>
<head>
    <style>
         body{
                background-image: url('13.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                color: whitesmoke;
                text-align: center;
                width: 90%;
                margin-top: 200px; 
                font-size: 25px;
            } 

            .color{
                color: whitesmoke;
                text-shadow: 2px 2px 2px black;
                text-decoration: none;
                font-size: 25px;
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

            // para conectar con la base de datos
            $conection=mysqli_connect("localhost","root","","ngalaxystar");

            //Para recoger los datos del formulario de los equipos
            $nombre=$_POST['nombreequipo'];
            $numerop=$_POST['numero'];
            $usuarioo=$_POST['idusuario'];
            $ciudades=$_POST['idciudad'];

            //La consulta para insertar los datos en la tabla de la base de datos
            $consulta="INSERT INTO equipos (equipo,jugadoresplantilla,idusuario,idciudad)
            VALUES ('$nombre','$numerop','$usuarioo','$ciudades')";

            //Segun si se registre o no bien la inscripción te pondra exito al inscribir o te mandara a una pagina de error al inscribir
            $resultado=mysqli_query($conection,$consulta) or die("".header("location:errorinscri.php")."");

            echo "Inscripción de equipo con exito";

            mysqli_close($conection);

    ?>
        <p></p>
    <!-- Un enlace que te vuelve al panel de control -->
    <a class="color" href="panel.php">Click para volver al panel de control</a>


</body>
</html>