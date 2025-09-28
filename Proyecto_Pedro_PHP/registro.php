<html>
    <head>
    <style>
            body{
                background-image: url('portada.jpg');
                background-repeat: no-repeat;
                background-size: cover;
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
            .tamañoo{
                font-size: 25px;
                color: skyblue;
            }
           
                </style>
    </head>
    
<body>
        <!-- Formulario para registrarse -->

    <form method="post" action="registrovalidar.php" >
        <h1>Regístrese</h1>

        <b class="tamaño">Introduzca  nombre de Presidente</b>
            <br>
        <input type="text" placeholder="Su nombre" name="presidente" required>
            <p></p>

        <b class="tamaño">Ingrese la contraseña que quiere usar</b>
            <br>
        <input type="password" placeholder="Contraseña" name="password" required>

        <p></p>
            
        <input type="submit" value="Registrar">
    </form>

</body>
</html>


