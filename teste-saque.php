<?php

use Alura\Banco\Model\Conta\Conta;
use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('123.456.789-12'),
        'Vinicius Dias', 
        new Endereco('Petropolis', 'bairro Teste', 'Rua lá', '37')
    )
);
$conta->deposita(500);
$conta->saca(100);
echo $conta->recuperaSaldo();
