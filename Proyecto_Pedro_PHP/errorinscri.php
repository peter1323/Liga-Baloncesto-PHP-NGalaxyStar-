<html>
<head>
    <style>
         body{
                background-image: url('12.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                color: whitesmoke;
                text-align: center;
                width: 99%;
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
        // Te muestra error al inscribir
        echo "Error en la inscripción <p></p>" ;

        // Un enlace que te vuelve al panel de control 
        echo "<a  class=\"color\" href=\"panel.php\">Click para volver al panel de control </a>";

    ?>
    
</body>
</html>