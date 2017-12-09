<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */

$total=0;

for ($n=0; $n<100; $n++){
    $total+=($n%2==0)? $n:0;

}
$msj ="La suma de los 100 primeros números pares es <span class = 'variable bold'>$total</span>"






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
    <div class="parrafo">Suma los 100 primeros números pares</div>
    <div class="parrafo">Muestro el resultado</div>

</div>
<div class="solucion">
    <h1>Iteraciones en php</h1>
    <div class="parrafo"><div class="bold"><?php echo $msj ?></div></div>
    <br />


</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>