<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/encuesta.css">
    <link rel="stylesheet" href="../../css/btn.css">
    <title>ADIVINA LA RESPUESTA</title>
</head>

<body>
    <h1>ADIVINA LA RESPUESTA</h1>
    <!-- Pantalla inicial -->
    <div id="pantalla-inicial">
        <p class="subtitulo">¿Puedes adivinar la respuesta correcta?</p>
        <button class="btn btn-comenzar" onclick="comenzarJuego()">COMENZAR A JUGAR</button>
    </div>
    <!-- Pantalla juego -->
    <div class="pantalla-juego" id="pantalla-juego" style="display: none;">
        <h2 id="pregunta"></h2>
        <div class="opciones">
            <div class="opcion" onclick="comprobarRespuesta(0)">
                <div class="boton" id="op0">A</div>
                <div class="resp" id="n0"></div>
            </div>
            <div class="opcion" onclick="comprobarRespuesta(1)">
                <div class="boton" id="op1">B</div>
                <div class="resp" id="n1"></div>
            </div>
            <div class="opcion" onclick="comprobarRespuesta(2)">
                <div class="boton" id="op2">C</div>
                <div class="resp" id="n2"></div>
            </div>
        </div>
    </div>
    </div>
    <!-- Pantalla final -->
    <div id="pantalla-final" style="display: none;">
        <h2>CORRECTAS: <span id="numCorrectas">0</span></h2>
        <h2>INCORRECTAS: <span id="numIncorrectas">0</span></h2>
    </div>
    <button class="btn-inicio" onclick="window.location.href='../../inicio/inicio_Es.php'">Volver a la Pantalla Inicial</button>
    <script src="script2.js"></script>
</body>

</html>