<?php

use Alura\Banco\Model\Endereco;


require_once 'autoload.php';

$umEndereco = new Endereco('uma cidade', 'bairro', 'rua', 'numero');
$outroEndereco = new Endereco('outra cidade', 'outro bairro', 'outra rua', 'outro numero');


$umEndereco->cidade = "Nova Cidade";

echo $umEndereco;