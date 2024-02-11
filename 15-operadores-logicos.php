<?php

$gatos_felinos = true;
$gatos_4_patas = true;
$gatos_vuelan = false;
$gatos_programan_php = false;

// and
// var_dump($gatos_felinos && $gatos_4_patas);

// or
// var_dump($gatos_felinos || $gatos_vuelan);

// Not
// var_dump(!$gatos_4_patas);


//Experimento

$resultado = $gatos_4_patas and $gatos_programan_php;

var_dump( $resultado );

echo "\n";