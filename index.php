<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrtLauncher Main Menu</title>
    <link rel="stylesheet" href="estilos.css" />
    <script src="https://kit.fontawesome.com/712575d4a5.js"
    crossorigin="annonymus"></script>
</head>
<body>
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

        <main class="main">
            <section class="banner">

            </section>

            <div id="busqueda">
                <select name="categoria">
                    <option value="0">Acción</option>
                    <option value="1">Arcade</option>
                    <option value="2">Aviones</option>
                    <option value="3">Aventura</option>
                    <option value="4">Carreras</option>
                    <option value="5">Cocina</option>
                    <option value="6">Construcción</option>
                    <option value="7">Deportes</option>
                    <option value="8">Estrategia</option>
                    <option value="9">Lucha</option>
                    <option value="10">Juego de laberintos</option>
                    <option value="11">Juego de mesa</option>
                    <option value="12">Misterio</option>
                    <option value="13">Habilidad</option>
                    <option value="14">Guerra</option>
                    <option value="15">Trivia</option>
                    <option value="16">Simulación</option>
                    <option value="17">Mundo libre</option>      
                </select>
            
                <div class="buscar">
                    <input type="text" placeholder="Buscar juegos" required>
                </div> 

                <div class="btnBuscar">
                    <input type="submit" value="Buscar">
                </div> 

            </div>
        </main>

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
          <label class="panas"><a href="nuestra información">Sobre Nosotros</a></label>
      </footer>
    </div>


</body>
</html>