<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */
function prueba(&$a, $b){
    global $msj_dentro_funcion_1;
    global $msj_dentro_funcion_2;

    $msj_dentro_funcion_1 ="Dentro de función  antes de modificar parámetros: <span class='variable'>\$a = $a  \$b = $b</span>";
    $a*=2;
    $b*=2;
    $msj_dentro_funcion_2 ="Dentro de función  después  de modificar parámetros <span class='variable'>\$a = $a   \$b = $b</span>";
}

$a=7;
$b=8;
$msj1="Programa principal, antes de infocar a la función. <span class='variable'>\$a = $a \$b = $b</span>";
prueba ($a, $b);
$msj2="Programa principal, después de infocar a la función. <span class='variable'>\$a = $a  \$b = $b</span>";

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
    <div class="titulo center">Funciones </div>
    <div class="parrafo bold">Función </div>
    <div class="parrafo margin20">Recibe dos parámetros (referencia y valor)</div>
    <div class="parrafo margin20">Duplica los valores de los parámetros</div>
    <div class="parrafo margin20">Visualiza los valores antes y después de modificarlos</div>

    <div class="parrafo bold">Programa principal </div>
    <div class="parrafo margin20">Crea dos variables</div>
    <div class="parrafo margin20">Visualiza sus valores</div>
    <div class="parrafo margin20">Invoca a la función </div>
    <div class="parrafo margin20">Vuleve a visualizar los valores</div>
<hr color:red/>
    <div class="parrafo cursiva">Plantea globalizar tanto $a como $b, y comprende el resultado </div>

</div>
<div class="solucion">
    <h1>Funciones: paso de parámetros</h1>
    <div class="parrafo"><div class="bold"><?php echo $msj1 ?></div></div>
    <div class="parrafo"><div class="bold"><?php echo $msj_dentro_funcion_1 ?></div></div>
    <div class="parrafo"><div class="bold"><?php echo $msj_dentro_funcion_2 ?></div></div>
    <div class="parrafo"><div class="bold"><?php echo $msj2?></div></div>
    <br />



</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>

</html>
