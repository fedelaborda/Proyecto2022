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
                <a href="http://localhost/Proyecto2022/index.php">Ort Launcher</a>
            </div>

            <div class="botones">
                <button class="header_btn">
                    <a href= "http://localhost/Proyecto2022/login.php">Iniciar Sesión</a> 
                </button>

                <button class="header_btn">
                    <a href= "http://localhost/Proyecto2022/registrarse.php">Registrarse</a>
                </button> 
            </div>

        </header>
            
        <nav class="menu">
            <div class="menu_wrapper">
                <a class="menu_item on" href= "http://localhost/Proyecto2022/index.php">
                    <span class ="menu_text"> Inicio </span>
                </a>
                <a class="menu_item" href= "http://localhost/Proyecto2022/biblioteca.php">
                    <span class ="menu_text"> Biblioteca </span>
                </a>
                <a class="menu_item" href= "http://localhost/Proyecto2022/perfil.php">
                    <span class ="menu_text"> Perfil </span>
                </a>
                <a class="menu_item" href= "http://localhost/Proyecto2022/ayuda.php">
                    <span class ="menu_text"> Ayuda </span>
                </a>
                <a class="menu_item" href= "http://localhost/Proyecto2022/publicarJuego.php">
                    <span class ="menu_text"> Publicar Juego </span>
                </a>
            </div>
        </nav>

        <main class="main">
            <section class="banner">

            </section>
            <div class="buscar">
                <input type="text" placeholder="Buscar juegos" required>
            </div> 

            <div class="btnBuscar">
                <input type="submit" value="Buscar">
            </div> 
             
            <section class="section">
                
            </section>
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
          <label class="donar"><a href="http://localhost/ANTEPROYECTO/donaciones.php">Donaciones</a></label>
          <label class="panas"><a href="nuestra información">Sobre Nosotros</a></label>
      </footer>
    </div>


</body>
</html>