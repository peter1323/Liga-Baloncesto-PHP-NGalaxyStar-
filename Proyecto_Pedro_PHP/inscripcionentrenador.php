<html>
    <head>

    <style>
         body{
                background-image: url('11.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                color: whitesmoke;
            }
            form{
                /* justify-content: center; */
                text-align: center;
                width: 100%;
                margin-top: 200px;
                text-shadow: 2px 2px 2px black;
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
    ?>
    
    <!-- Formulario para inscribir a los entrenadores -->
    <form method="post" action="inscrientre.php" >

            Ingrese nombre del equipo:
            <select name="idequipo" id="equipos">
                <option value="0">Seleccione equipo</option>
                    <?php
                    //Este trozo de php coge los datos de la tabla selecionada y te las enseña en foma de opción en un select
                    $conection=mysqli_connect("localhost","root","","ngalaxystar");
                    $consulta=$conection->query("SELECT * FROM equipos");
                    while($filas=$consulta->fetch_array()) {

                    echo "<option value='" .$filas['id']."'>".$filas['equipo']."</option>";
                    }
                    ?>
            </select>
                <p></p>

            Nombre del primer entrenador:
            <input type="text" name="nombre1e" required>
                <p></p>

            Nombre del segundo  entrenador:
            <input type="text" name="nombre2e" required>
                <p></p>

            <input type="submit" value="enviar">
                <p></p>

            <a class="color" href="panel.php">Click para volver al panel de control</a>
    </form>

</body>
</html>