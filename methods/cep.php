<?php

$cep = $_POST['cep'];

$apiURL = "http://viacep.com.br/ws/$cep/xml/";

$xml = simplexml_load_file($apiURL);

echo "$xml->localidade";
echo "<br>";
echo "$xml->bairro";
echo "<br>";
echo "$xml->uf";
echo "<br>";
echo "$xml->ddd";


?>
<br><br>
<a href="../views/index.php">Voltar</a>