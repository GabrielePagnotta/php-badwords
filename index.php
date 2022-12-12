<?php

$parola1="***";
$parola2=$_GET[parola];
$frase="Da grande farò il $parola1";
$frase2="Da grande farò il $parola2";
$lunghezza1=strlen($frase);
$lunghezza2=strlen($frase2);


echo $frase2;
echo "<br>";
echo "il testo è lungo: $lunghezza2 caratteri";

echo "<br>";
echo "<br>";

echo $frase;
echo "<br>";
echo "il testo è lungo: $lunghezza1 caratteri";

?>


