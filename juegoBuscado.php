<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda - OrtLauncher</title>
    <link rel="stylesheet" href="estilobiblioteca.css" />
</head>
<body>
        <!--<div id = "container">
            <header>
                <h1> Ort Launcher</h1>
            </header>
            
            <nav>
                <ul>
                    <li>
                        <a href= "index.php">Inicio</a>
                    </li>
                    <li>
                        <a href= "biblioteca.php">Biblioteca</a>
                    </li>
                    <li>
                        <a href= "perfil.php">Perfil</a>
                    </li>
                    <li>
                        <a href= "ayuda.php">Ayuda</a>
                    </li>
                    <li>
                        <a href= "publicarJuego.php">Publicar Juego</a>
                    </li>
                </ul>
            </nav>
        </div> -->

        <div id = "container">
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
        </div>
        
        <div class="juegos">
            <div class="juego">
               <label class="j1">Juego 1 ejemplo</label>
            </div>
    
            <div class="juego">
               <label class="j2">Juego 2 ejemplo</label>
            </div>
    
            <div class="juego">
               <label class="j3">Juego 3 ejemplo</label>
            </div>

            <div class="juego">
                <label class="j3">Juego 4 ejemplo</label>
            </div>
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