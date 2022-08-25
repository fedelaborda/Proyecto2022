<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="login.css">
</head>

<nav>
                <ul>
                    <li>
                        <a href= "http://localhost/Proyecto2022/index.php">Volver al Menú</a>
                    </li>
                </ul>
        </nav>  

<body>
    <div class="formulario">
      <h2>Inicia Sesión con tu cuenta</h2>
      <form method=POST> 
    
      <div class="usuario">
      <input type="email" name="mail" placeholder="Correo Electronico" required> <br>
      </div>

      <div class="contraseña">
      <input type="password" name="contraseña" placeholder="Contraseña" required> <br>
      </div>
      
      <div class="submit">
      <input type="submit" value="Iniciar Sesión">
      <br>
      </div>

      <div class="link">  
        <span>Quiero <a href="http://localhost/Proyecto2022/registrarse.php">Registrarme</a></span>
        <br>
        </div>
        <div class="link2">
        <label><a href="Acavaellinkalaotrapantallapararecuperarcontraseña">Olvide mi contraseña</a></label>
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
          <label class="donar"><a href="http://localhost/ANTEPROYECTO/donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>

</body>
</html>