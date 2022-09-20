<?php

$word = $_GET['word'];
$replace = $_GET['replace'];

$frase = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, amet. Lorem';
$lunghezzaFrase = strlen($frase);
$nuovaFrase = str_replace($word, $replace, $frase);


?>

<h2> <?= $nuovaFrase ?> </h2>
<p> La lunghezza della frase è di: <?= $lunghezzaFrase ?> caratteri </p>

