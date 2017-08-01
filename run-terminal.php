<?php 

#!/usr/bin/php

$cidade = readline("Digite a cidade/municipio: ");
$estado = readline("Digite o estado: ");

require 'vendor/autoload.php';

// Retorna '3536505'
$municipio = new \MunicipiosIBGE\Normalize($cidade);

$estado = new \MunicipiosIBGE\Normalize($estado);

$ibge = new \MunicipiosIBGE\Municipios($municipio, $estado);

echo 'CODIGO: ' + $ibge->getCodeIBGE();
echo "\n";