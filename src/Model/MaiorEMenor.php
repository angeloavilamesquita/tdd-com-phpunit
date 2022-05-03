<?php

namespace Aula\Model;

class MaiorEMenor
{
    private $menor;
    private $maior;

    public function encontra(CarrinhoDeCompras $carrinhoDeCompras): void
    {
        $produtos = $carrinhoDeCompras->getProdutos();
        foreach ($produtos as $produto) {
            if (empty($this->menor) || $produto->getValor() < $this->menor) {
                $this->menor = $produto->getValor();
            } 
            if (empty($this->maior) || $produto->getValor() > $this->maior) {
                $this->maior = $produto->getValor();
            }
        }
    }

    public function getMenor(): float
    {
        return $this->menor;
    }

    public function getMaior(): float
    {
        return $this->maior;
    }
}