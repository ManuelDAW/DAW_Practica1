<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 *
 *
 * Time: 12:03
 */
define (EDAD_DEFINE,48);
const EDAD_CONST=11;



$msj_define= "<div class='margin20'>Tengo ".EDAD_DEFINE." años (Constante declarada con <span class='variable'>define</span>)</div>" ;
$msj_const= "<div class='margin20'>Tengo ".EDAD_CONST."a ños (Constante declarada con <span class='variable'>const</span>)</div>" ;
$msj1= "<div class='margin20'>Para los 100, me faltan ".(100-EDAD_DEFINE)." años (Operación de constante con <span class='variable'>define</span>)</div>";
$msj2= "<div class='margin20'>Para los 100, me faltan ".(100-EDAD_CONST)." años (Operación de constante con <span class='variable'>const</span>)</div>";

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
    <div class="titulo center">Declarando constantes</div>
    <div class="parrafo"><span class="bold">define</span> No funciona en clases </div>
    <div class="parrafo"><span class="bold">const</span> Funciona tanto en clases como fuera de ellas</div>


</div>
<div class="solucion">
    <h1>Constantes en PHP</h1>
    <div class="parrafo"><div class="bold">Constante declarada con Define &nbsp&nbsp</div><?php echo $msj_define ?></div>
    <div class="parrafo"><div class="bold">Constante declarada con const&nbsp&nbsp</div><?php echo $msj_const ?></div>
    <div class="parrafo"><div class="bold">Operación con define&nbsp&nbsp</div><?php echo $msj1 ?></div>
    <div class="parrafo"><div class="bold">Operación con const&nbsp&nbsp</div><?php echo $msj2 ?></div>


</div>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>
</body>
</html>