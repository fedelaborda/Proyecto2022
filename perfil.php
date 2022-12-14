<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="estiloperfil.css">
</head>
<body>
        <header class="header">
            <div class="main-title">
                <b><label class="Main">Ort Launcher</label></b>
            </div>

            <div class="botones">
                <button class="header_btn">
                    <a href= "login.php">Iniciar Sesión</a> 
                </button>

                <button class="header_btn">
                    <a href= "registrarse.php">Registrarse</a>
                </button> 
            </div>

        </header>

        <nav class="menu">
            <div class="menu_wrapper">
                <a class="menu_item on" href= "index.php">
                    <img class="menu_icon" src="img/inicio.png" width="80px">
                    <!--<span class ="menu_text"> Inicio </span>-->
                </a>
                <a class="menu_item" href= "biblioteca.php">
                    <img class="menu_icon" src="img/biblio.png" width="80px">
                    <!--<span class ="menu_text"> Biblioteca </span>-->
                </a>
                <a class="menu_item" href= "perfil.php">
                    <img class="menu_icon" src="img/logoperfil.png" width="80px">
                    <!--<span class ="menu_text"> Perfil </span>-->
                </a>
                <a class="menu_item" href= "ayuda.php">
                    <img class="menu_icon" src="img/ayuda.png" width="120px">
                    <!--<span class ="menu_text"> Ayuda </span>-->
                </a>
                <a class="menu_item" href= "publicarJuego.php">
                    <img class="menu_icon" src="img/juegos.png" width="80px">
                    <!--<span class ="menu_text"> Publicar Juego </span>-->
                </a>
            </div>
        </nav>
        <div class="foto">
            <h3>Perfil</h3>
        </div>
        <div class="caja">
            <div class="perfil">
                <img src="img/perfil-empty.png" width="120px">
            </div>
            <div class="editar">
                <a href="agregarFotoPerfil.php"><img src="img/45406.png" width="30px"></a>
            </div>
            <div class="troll"></div>
            <label>Tu correo electronico es:</label>
        </div>


        <footer>
            <div class="contenedor">
                <div class="contactos">
                    <div class="titulo">
                        <h2 >Medios de contacto:</h2>
                    </div>
                    <div class="fotos">
                        <img src="ig.png" width="50px">
                        <img src="fc.png" width="50px">
                        <img src="redit.png" width="50px"><br>
                    </div>
                    <div class="derechos">
                        <label>Ort Launcher © Todos los derechos reservados</label><br>
                    </div>
                    <div class="donaciones">
                        <label class="donar"><a href="donaciones.php">Donaciones</a></label>
                        <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
                    </div>
                    
                </div>                
            </div>
            
        </footer>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfil - OrtLauncher</title>
    <link rel="stylesheet" href="estiloperfil.css" />
</head>

<body>  

<nav>
         <ul>
                <li>
                <a href= "http://localhost/Proyecto2022/index.php">Volver al Menú</a>
                </li>
        </ul>
    </nav>  

    
<header>
        <h1>Nombre de perfil<h1>
    </header>

    <div class="modificarPerfil">
        <h2>Modificar Perfil:<h2>
            <input type = "text" placeholder = "Nombre"> <br>
            <input type = "text" placeholder = "Confirmar nombre"> <br>
            <input type = "text" placeholder = "Correo electrónico"> <br>
            <input type = "text" placeholder = "Confirmar correo electrónico"> <br>
            <input type = "text" placeholder = "Contraseña"> <br>
            <input type = "text" placeholder = "Confirmar contraseña"> <br>    
            <div class="btnConfirmar">
            <input type = "submit" value = "Confirmar cambios">
    </div>

    <footer>
          <div class="contenedor">
            <h2 class="titulo">Medios de contacto:</h2>
          </div>
          <div class="ig">
              <img src="ig.png" width="50px">
          </div>
          <div class="fc">
                <img src="fc.png" width="50px">
          </div>
          <div class="redit">
            <img src="redit.png" width="52px">
          </div>
          <label class="copy">Ort Launcher © Todos los derechos reservados</label>
          <label class="donar"><a href="http://localhost/ANTEPROYECTO/donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra informacion">Sobre Nosotros</a></label>
      </footer>

</body>
</html>-->