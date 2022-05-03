<?php

namespace Aula\Model;

class CarrinhoDeCompras
{
    private $produtos = [];

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function adiciona(Produto $produto): void
    {
        $this->produtos[] = $produto;
    }
}