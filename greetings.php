<?php

$paragrafo = $_GET['testo'];
$censura = $_GET['censura'];
//var_dump($paragrafo);

$textLength = strlen($paragrafo);
$newString = str_ireplace($censura, '***', $paragrafo);
$newTextLenght = strlen($newString);

echo "Il paragrafo: $paragrafo è lungo $textLength caratteri"."<br>";
echo "Il nuovo paragrafo: $newString è lungo $newTextLenght caratteri";