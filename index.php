<?php

$ovelha = "1 ovelha";
$ovelha2 = "2 ovelha";
$resultado = (int) $ovelha+$ovelha2;

echo $resultado;

$lista = array(2, 3, 5, 52);

foreach ($lista as $index=>$elemento) {
    
    echo $index." - ". $elemento;
    echo "<br/>";
    
}

//Seta a timezone
date_default_timezone_set('America/Sao_Paulo');

require './Usuario.php';

$usu = new Modelo\Usuario\Usuario('Wagner');

echo $usu->getTime();
echo time();
echo "<br/><br/>";
echo $usu->getData();
echo "<br/><br/>";
echo Modelo\Usuario\Usuario::getData();

$aceite = true;

echo $aceite ? 'Ele aceitou !' : 'Ele não aceitou !';
echo "<br/><br/>";

echo date('l', strtotime('1994-06-04'));

?>
