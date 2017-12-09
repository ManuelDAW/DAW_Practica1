<?php
/**
 * Created by PhpStorm.
 * User: manuel
 * Date: 16/11/17
 * Time: 12:03
 */
function mostrar_valor($valor, $tipo)
{

    switch ($tipo) {
        case 'dec':
            $msj = "<td>\$v=125</td> <td>Variable <span class='bold'>decimal</span>, valor <span class='variable'>-$valor-</span></td>\n";
            break;
        case 'oct':
            $msj = "<td>\$v=0274</td><td> Variable <span class='bold'>octal</span>, valor <span class='bold'>decimal</span> <span class='variable'>-$valor-</span> y en <span class='bold'>octal</span> <span class='variable'>" . decoct($valor) . "</span><br />\n";
            break;
        case 'bin':
            $msj = "<td>\$v=01100</td><td>Variable <span class='bold'>binaria</span>, valor <span class='bold'>decimal</span> <span class='variable'>-$valor-</span> y en <span class='bold'>binario</span>  <span class='variable'>" . decbin($valor) . "</span></td>\n";
            break;
        case 'hex':
            $msj = "<td>\$v=0xABC12</td><td>Variable <span class='bold'>hexadecimal</span>,valor <span class='bold'>decimal</span> <span class='variable'>-$valor-</span> y en <span class='bold'>hexadecimal</span>  <span class='variable'>" . dechex($valor) . "</span></td>\n";
            break;
        case 'string1':
            $msj = "<td>\$v=\"Esto es una cadena de caracteres\"</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-$valor-</span></td>\n";
            break;
        case 'string2':
            $msj = "<td>\$v='Esto es una cadena de caracteres'</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-$valor-</span></td>\n";
            break;
        case 'string3':
            $valor = <<<FIN
<pre>Esto que ves, 
 es una cadena
multilínea
y termina aquí</pre>
FIN;
            $a= "<<< FIN $valor FIN;";
            $valor = <<<FIN
Esto que ves, 
 es una cadena
multilínea
y termina aquí
FIN;
            $msj = "<td>\$v=$a</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-$valor-</span></td>\n";
            break;
        case 'string4':
            $valor = <<<FIN
<pre>Esto que ves, 
 es una cadena
multilínea
y termina aquí</pre>
FIN;
            $a= "<<< FIN<br /> ".htmlspecialchars('<pre>')."$valor".htmlspecialchars('</pre>')."<br /> FIN;";
            $msj = "<td>\$v=$a</td><td>Variable <span class='bold'>string</span>, valor  <span class='variable'>-$valor-</span></td>\n";
            break;
        case 'float1':
            $n = sprintf("%e", $valor);
            $msj = "<td>\$v=$valor</td><td>Variable <span class='bold'>float</span>,valor  <span class='variable'>-$valor-</span> y en <span class='bold'>notación científica</span> es <span class='variable'>$n </span></td>\n";
            break;
        case 'float2':
            $n = sprintf("%e", $valor);
            $msj = "<td>\$v=$n</td><td>Variable <span class='bold'>float</span>,valor <span class='variable'>-$valor-</span>  y en <span class='bold'>notación científica</span> es <span class='variable'>$n </span></td>\n";

            break;
        case 'null':
            $msj = "<td>\$v=null</td><td>Variable <span class='bold'>null</span>  es <span class='variable'>-$valor-</span> y en string es<span class='variable'> null<span> </td>\n";
            break;
        case 'bool':
            $a = ($valor == true) ? 'true' : 'false';
            $msj = "<td>\$v=$a</td><td>Variable <span class='bold'>boolean</span>,valor <sapn class='variable'>-$valor-</sapn> y en string es <span class='variable'>$a</span></td>\n";
            break;
    }
    return $msj;


}


$n = 0;
$a[$n]['var'] = 125;
$a[$n++]['tipo'] = 'dec';
$a[$n]['var'] = 0274;
$a[$n++]['tipo'] = 'oct';
$a[$n]['var'] = 0xAbC12;
$a[$n++]['tipo'] = 'hex';
$a[$n]['var'] = 0b1100;
$a[$n++]['tipo'] = 'bin';


$a[$n]['var'] = 1.23432230003322014000002234101;
$a[$n++]['tipo'] = 'float1';
$a[$n]['var'] = 1234E-2;
$a[$n++]['tipo'] = 'float2';
$a[$n]['var'] = null;
$a[$n++]['tipo'] = 'null';
$a[$n]['var'] = true;
$a[$n++]['tipo'] = 'bool';
$a[$n]['var'] = false;
$a[$n++]['tipo'] = 'bool';
$a[$n]['var'] = "Esto es una cadena de caracteres";
$a[$n++]['tipo'] = "string1";
$a[$n]['var'] = 'Esto es otra cadena de caracteres';
$a[$n++]['tipo'] = 'string2';
$a[$n]['var'] = <<<FIN
Esto que ves, 
 es una cadena
multilínea
y termina aquí
FIN;
$a[$n++]['tipo'] = "string3";
$a[$n]['var'] = <<<FIN
<pre>Esto que ves, 
 es una cadena con preformato
multilínea
y termina aquí</pre>
FIN;
$a[$n++]['tipo'] = "string4";

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
    <div class="titulo center">Mostrando variables</div>
    <div class="parrafo"><span class="bold">Valores asignados</span> son los asignaciones realizadas en el progreama php </div>
    <div class="parrafo"><span class="bold">Mostrando valores</span> muestra el valor de la variable y el valor convertido a la representación deseada</div>
</div>
<div class="solucion">
    <h1>Variables en PHP</h1>
    <table border="1">
        <tr>
            <th>Valores Asignados</th>
            <th>Mostrando Valores</th>
        </tr>

    <?php
    foreach ($a as $v) {
        $txt = mostrar_valor($v['var'], $v['tipo']);

       echo "<tr>";
        echo "<span class='msj'>$txt</span>\n";
        echo "</tr>\n";
    }
    ?>
    </table>
</div>
<div class ="enunciado">
    <h3><a href="index.php">Volver</a></h3>
</div>

</div>
</body>
</html>