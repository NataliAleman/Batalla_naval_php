<?php
    $jugador1 = $_POST["jugador1"];
    $jugador2 = $_POST["jugador2"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Estilos/normalize.css">
    <link rel="stylesheet" href="Estilos/styles1.css">
    <title>Batalla Naval</title>
</head>

<body>
    <div class="container">
        <div id="div-titulo">
            <h1 id="titulo">Batalla Naval</h1>
        </div>
        <div id="tableros">
            <div id="div-texto-tblro">
                <h2 id="texto-tblro"></h2>
            </div>
            <div class="tablero" id="tablero-jugador1"></div>
            <div class="tablero" id="tablero-jugador2"></div>
            <div class="tablero" id="tablero-jugador1-ataca"></div>
            <div class="tablero" id="tablero-jugador2-ataca"></div>
        </div>
        <div id="div-texto-barcos">
            <h2 id="instrucciones">Instrucciones:</h2>
            <p id="texto-barcos">1. Presiona las casillas en las que deseas colocar tus barcos.<br>2. Atención el en momento de elegir las pocisiones de tus barcos, ya que debe elegirlos cada jugador, (no hacer trampa, cuando tú amigo elija sus barcos, tú debes voltearte y no ver las posiciones de los barcos.<br>3. Tienes 4 barcos para posicionar, elige el lugar de tu barco, recuerda que puede abarcar más de 1 casilla.</p>
        </div>
        <div id="btn-aceptar">
            <button class="aceptar" id="aceptar">LISTO</button>
        </div>
        <div id="btn-siguiente">
            <button class="aceptar" id="siguiente">Continuar</button>
        </div>
    </div>
    <script src="juego.js"></script>
    <script>
        let juego1 = new Juego(<?php echo json_encode($jugador1) ?>, <?php echo json_encode($jugador2); ?>); // Aquí se crea el objeto juego
        juego1.colocarBarcos(); // Aquí se colocan los barcos
        let btnAceptar = document.getElementById("btn-aceptar"); // Botón para colocar los barcos
        btnAceptar.addEventListener("click", () => { // Evento para colocar los barcos
            btnAceptar.style.display = "none"; // Se oculta el botón
            juego1.colocarBarcos(); // Se colocan los barcos.
        });
    </script>
</body>

</html>