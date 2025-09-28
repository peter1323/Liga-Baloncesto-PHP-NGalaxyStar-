<html>
<head>

<style>
         body{
                background-image: url('14.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                color: whitesmoke;
                text-align: center;
                width: 99%;
                margin-top:  200px; 
                font-size: 25px;
                text-shadow: 2px 2px 2px black;
                
                
            }
            .caja
            {  
                margin-left: 33%;    
            }
            .color{
                color: whitesmoke;
                text-shadow: 10px 10px 10px black;
                text-decoration: none;
                font-size: 25px;
                font-weight: bold;
                background-color: black;
                opacity: 0.8;
            }

            .echos{
                color: whitesmoke;
                background-color: black;
                opacity: 0.9;
                text-align: center;
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
          
        <h1>Tabla de equipos</h1>  

        <div class="caja">
  <?php
        // para conectar con la base de datos
        $conection=mysqli_connect("localhost","root","","ngalaxystar");

        //La consulta para insertar los datos en la tabla de la base de datos
        $consulta="SELECT usu.usuario,e.equipo,e.jugadoresplantilla,ciu.ciudad FROM equipos e inner JOIN ciudades ciu on e.idciudad=ciu.id inner JOIN usuarios usu on e.idusuario=usu.id";

        // La tabla hecha para ver los campos de la base de datos en modo tabla
        echo "<table border='1'>";

        echo "<tr class=\"echos\"><th>Presidentes</th><th>Equipos</th><th>Nº de jugadores en la plantilla</th><th>Ciudad</th></tr>";

        $sql=$conection->query($consulta);

        while($fila=$sql->fetch_array()){

          echo "<tr class=\"echos\"><td>".$fila['usuario']."</td><td>".$fila['equipo']."</td><td>".$fila['jugadoresplantilla']."</td><td>".$fila['ciudad']."</td></tr>";

        };

        echo "</table>";

  ?>
        </div>
  
  <!-- Enlace para volver al panel de control -->
  <a class="color" href="panel.php">Click para volver al panel de control</a>

</body>
</html>