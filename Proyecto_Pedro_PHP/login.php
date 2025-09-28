<html>
<head>
<style>
            body{
                background-image: url('portada.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                color: whitesmoke;
                text-shadow: 2px 2px 2px black;
            }
            form{
                justify-content: center;
                width: 98.9%;
                text-align: center;
                margin-top: 200px;
                margin-left: 1.5%;
                 
            }
            .tamaño{
                font-size: 25px;
                color: orangered; 
                text-shadow: 2px 2px 2px black; 
            }
            .tamañoo{
                font-size: 25px;
                color: whitesmoke;
                text-decoration: none;
                text-shadow: 2px 2px 2px black; 
            }
           
                </style>
</head>
<body>
    <!-- fomulario para hacer login -->
    
    <form method="post" action="validar.php" >

        <h1>Inicie sesión</h1>
            
        <b class="tamaño">Introduzca  Usuario</b>
            <p></p>
        <input type="text" placeholder="Su nombre" name="usuario" required>
            <p></p>
            
        <b class="tamaño">Introduzca contraseña</b>
            <p></p>
        <input type="password" placeholder="Contraseña" name="contraseña" required>
            <p></p>

        <a href="registro.php" class="tamañoo">Registrarse</a>
            <p></p>
            
        <input type="submit" value="enviar">
        
    </form>
        
</body>
</html>