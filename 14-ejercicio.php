<?php

//facil
$nombre = "Carlos"; //String
$apellido = "Gómez"; //String
$edad = 18; //Integer
$aprobado = true; // Boolean

//Medio

$promedio = (8 + 9.5 + 9 + 10 + 8) / 5; // Decimal -> Float
$nombre_completo = $nombre . " " . $apellido; //String
$presento_examen = (bool) 1; //Boolean

//Avanzado

$numero_preguntas = 5 + "5"; //Integer
$numero_respuestas = "5" + 5; //Integer
$promedio_maximo = $numero_respuestas / 1.0; // Decimal -> Float
$michis = 3 + "5 michis"; //Integer (con warning)

var_dump($edad);
echo "\n";
var_dump($aprobado);
echo "\n";
var_dump($promedio);
echo "\n";
var_dump($nombre_completo);
echo "\n";
var_dump($numero_preguntas);
echo "\n";
var_dump($numero_respuestas);
echo "\n";
var_dump($promedio_maximo);
echo "\n";


