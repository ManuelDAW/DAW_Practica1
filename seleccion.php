<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */


$edad = rand(0,150);


switch (true){

    case ($edad <=11):
        $msj="Con $edad años eres una niña";
        break;
    case ($edad <=17):
        $msj="Con $edad años eres un adolescente";
        break;
    case ($edad <=35):
        $msj="Con $edad años eres una  joven";
        break;
    case ($edad <=65):
        $msj="Con $edad años eres un  adulto";
        break;
    case ($edad <=110):
        $msj="Con $edad años eres una jubilada";
        break;
    default:
        $msj=" $edad años, es una edad no contemplada en nuestra encuesta";
        break;




}



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./estilo.css" type="text/css">
    <title>Document</title>
</head>
<body>
<div class="enunciado">
    <div class="titulo center">Iteraciones tipo switch</div>
    <div class="parrafo"><span class="bold">switch (true) </span> Puedo hacerlo gracias a la expresividad de las instrucciones en php </div>

</div>
<div class="solucion">
    <h1>Selecciones en php</h1>
    <div class="parrafo"><div class="bold"><?php echo $msj ?></div></div>
    <br />
    <div class="parrafo"><span class="bold"><a href="iteraciones.php">Probar otra edad</a></span> </div>


</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>