<html>
<head>
    <style>
       body{
                background-image: url('15.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                
                
            } 
            #caja
            {
                width: 40vW;
                margin: 300px auto 0;
            }
            .color{
                color:gold;
                background-color: black;
                opacity: 0.8;
                /* color: whitesmoke;*/
                /* text-shadow: 2px 2px 2px black;  */
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
    ?>
        <!-- Aqui se encuentran los enlaces a las distintas páginas del proyecto -->
    <div id="caja">

        <a class="color" href="inscripci%C3%B3n.php">1.Formulario inscripción de equipos para la Liga NGalaxystar</a>
        <p></p>
        <a class="color" href="inscripcionentrenador.php">2.Formulario para inscribir a los entrenadores</a>
        <p></p>
        <a  class="color" href="tablaequipos.php">3.Ver los equipos inscritos en la liga NGalaxystar</a>
        <p></p>
        <a  class="color" href="tablaentrenadores.php">4.Ver los equipos que entrenan los entrenadores</a>
        <p></p>
        <a  class="color" href="cerrar.php">5.Cerrar sesión</a>

    </div>

</body>
</html>