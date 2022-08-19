<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicar - OrtLauncher</title>
    <link rel="stylesheet" href="estilopublicar.css" />
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
        <h1>Publicar<h1>
    </header>


    <input type = "text" placeholder = "Nombre del Juego/App"> <br>
    <input type = "text" placeholder = "Descripción"> <br>
    
    <select name="Categoría">
        
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
        <option value="10">Juego de laberintos</option><option value="0">Argentina</option>
        <option value="11">Juego de mesa</option>
        <option value="12">Misterio</option>
        <option value="13">Habilidad</option>
        <option value="14">Guerra</option>
        <option value="15">Trivia</option>
        <option value="16">Simulación</option>
        <option value="17">Mundo libre</option>
        
    </select>

    </select>

    </select>

    </select>

    <div class = "drag-area">
        <h2>Arrastra y suelta imágenes</h2>
        <span>0</span>
        <button>Selecciona tus archivos</button>
        <input type="file" name="" id="input-file" hidden multiple />
    </div>
    
    <script src="publishGame.js"></script>

    <div id="preview"></div>


</body>
</html>