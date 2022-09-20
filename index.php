<?php

$word = $_GET['word'];
$replace = $_GET['replace'];

$frase = 'lorem ipsum, dolor lorem sit amet consectetur adipisicing elit. Aspernatur, amet. lorem';
$lunghezzaFrase = strlen($frase);

$nuovaFrase = str_replace($word, $replace, $frase);
$lunghezzaFraseModificata = strlen($nuovaFrase);


?>

<h2> <?= $frase ?> </h2>
<h2> <?= $nuovaFrase ?> </h2>
<p> La lunghezza della frase originale è di: <?= $lunghezzaFrase ?> caratteri </p>
<p> La lunghezza della frase modificata è di: <?= $lunghezzaFraseModificata ?> caratteri </p>


