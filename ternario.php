<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */

$num = rand(1,100);
$msj =  ($num % 2 == 0)? "El número $num es par" : "El número $num es impar";


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
    <div class="titulo center">Operador Ternario</div>
    <div class="parrafo">Genera un núemro aleatorio. </div>
    <div class="parrafo">Evalúa con un operador ternario si es par o no.</div>
    <div class="parrafo">Informa de ello con un mensaje.</div>


</div>
<div class="solucion">
    <h1>Operador Ternario</h1>
    <div class="parrafo"><div class="bold"><?php echo $msj ?></div></div>
    <br />
    <div class="parrafo"><span class="bold"><a href="ternario.php">Probar otra númerox</a></span> </div>


</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>