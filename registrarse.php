<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="registrarse.css">
</head>

<nav>
                <ul>
                    <li>
                        <a href= "index.php">Volver al Menú</a>
                    </li>
                </ul>
        </nav>  

<body>
    <div class="registro">
    <h2>Registra un nuevo usuario</h2>

    <form action="sesionhandler.php" method=POST>
    <div class="usuario">
    <input type="email" name="mail" placeholder="Correo Electronico" required> <br>
    </div>
    
    <form action="sesionhandler.php" method=POST>
    <div class="contraseña">
    <input type="password" name="contrasenias" placeholder="Contraseña" required> <br>
    </div>
    
    <form action="sesionhandler.php" method=POST>
    <div class="confirmacion">
    <input type="password" name="confirmar" placeholder="Confirmar contraseña" required> <br>
    </div>

    <div class="submit">
    <input type="submit" value="Registrarse">
    <br>
    </div>

    <div class="link">
    <span> Ya tenes cuenta? <a href="login.php">Iniciar Sesión</a></span>
    </div>

    
    </form>

    </div>

    <footer>
          <div class="contenedor">
            <h2 class="titulo">Medios de contacto:</h2>
          </div>
          <div class="ig">
              <img src="ig.png" width="50px">
          </div>
          <div class="fc">
              <img src="fc.png" width="50px"></a>
          </div>
          <div class="redit">
              <img src="redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>

</body>
</html>