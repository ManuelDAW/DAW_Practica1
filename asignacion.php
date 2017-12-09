<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */
$n = 0;
$asignacion[$n]['e'] = '$a=5';
$asignacion[$n++]['r'] = ($a = 5);
$asignacion[$n]['e'] = '$a=5.7';
$asignacion[$n++]['r'] = ($a = 5.7);
$asignacion[$n]['e'] = '$a=0b100001';
$asignacion[$n++]['r'] = ($a = 0b100001);
$asignacion[$n]['e'] = '$a="hola caracola"';
$asignacion[$n++]['r'] = ($a = "hola caracola");
$asignacion[$n]['e'] = '$a=5+9';
$asignacion[$n++]['r'] = ($a = 5 + 9);
$asignacion[$n]['e'] = '$a="hola"."caracola"';
$asignacion[$n++]['r'] = ($a = "hola" . "caracola");
$asignacion[$n]['e'] = '$a= print("hola caracola")';
$asignacion[$n++]['r'] = ($a = print("hola caracola"));
$asignacion[$n]['e'] = '$a=($v=8)';
$asignacion[$n++]['r'] = ($a = ($v = 8));

/**
 * @param $exp es la expresión de asignación
 * @param $valor es el valor que retorna la propia expresión
 */
function mostrar_valor($exp, $valor){
    $msj = "<td><span class=bold>$exp</td> <td>-<span class='variable'>$valor</span>-</td>\n";
    return $msj;
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

<body>

<div class="enunciado">
    <div class="titulo center">Expresión de asignación</div>
    <div class="parrafo"><span class="bold">Expresión asignada</span> Siguiendo las especificaciones del enuniado.</div>
    <div class="parrafo"><span class="bold">Valor de la expresión</span> Valor que devuelve la <span class="bold">expresión.</span>
        de asignacion
    </div>
</div>
<div class="solucion">
    <h1>Variables en PHP</h1>
    <table border="1">
        <tr>
            <th>Expresión asignada</th>
            <th>Valor de la expresión</th>
        </tr>

        <?php
        foreach ($asignacion as $v) {
            $txt = mostrar_valor($v['e'], $v['r']);

            echo "<tr>";
            echo "<span class='msj'>$txt</span>\n";
            echo "</tr>\n";
        }
        ?>
    </table>
</div>
<div class="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</div>
</body>

</html>
