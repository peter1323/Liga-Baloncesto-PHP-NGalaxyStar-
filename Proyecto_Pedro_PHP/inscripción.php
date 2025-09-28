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
                font-size: 25px;
                text-shadow: 2px 2px 2px black; 
                 
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
        <!-- Este formulario recoge los datos para inscribir a los equipos en la liga NGALAXYSTAR -->
    <form method="post" action="insertinscripcion.php" >

            Ingrese nombre del equipo:
            <input type="text" name="nombreequipo" required>
                <p></p>

            Ingrese el número de  jugadores que forman la plantilla:
            <input type="number" min="10" max="15" placeholder="10-15" name="numero" required>
                <p></p>

            Elige la ciudad:
            <select name="idciudad" id="ciudad">
                    <option value="0">Seleccione ciudad</option>
                    <?php
                    //Este trozo de php coge los datos de la tabla selecionada y te las enseña en foma de opción en un select
                        $conection=mysqli_connect("localhost","root","","ngalaxystar");
                        $consulta=$conection->query("SELECT * FROM ciudades");
                        while($filas=$consulta->fetch_array()) {

                        echo "<option value='".$filas['id']."'>".$filas['ciudad']."</option>";
                        }
                    ?>

            </select>
                <p></p>

            Elige el presidente de su equipo:
            <select name="idusuario" id="usuario">
                    <option value="0">Seleccione Presidente</option>
                    <?php
                    //Este trozo de php coge los datos de la tabla selecionada y te las enseña en foma de opción en un select
                        $conection=mysqli_connect("localhost","root","","ngalaxystar");
                        $consulta=$conection->query("SELECT * FROM usuarios");
                        while($filas=$consulta->fetch_array()) {

                        echo "<option value='".$filas['id']."'>".$filas['usuario']."</option>";
                        }
                    ?>

            </select>
                <p></p>

            <input type="submit" value="enviar">
                <p></p>
                
            <!-- Un enlace que te vuelve al panel de control -->
            <a class="color" href="panel.php">Click para volver al panel de control</a>
    </form>

</body>
</html>