<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Pessoa;

class Titular extends Pessoa
{
    private $endereco;

    public function __construct(CPF $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }
}
