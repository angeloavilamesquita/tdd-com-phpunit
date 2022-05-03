<?php

namespace Tests\Model;

use Aula\Model\CarrinhoDeCompras;
use Aula\Model\MaiorEMenor;
use Aula\Model\Produto;
use PHPUnit\Framework\TestCase;

class MaiorEMenorTest extends TestCase
{
    public function testMetodoEncontraEmOrdemCrescente(): void
    {
        $maiorEMenor = new MaiorEMenor();
        $carrinhoDeCompras = new CarrinhoDeCompras();
        
        $carrinhoDeCompras->adiciona(new Produto('Geladeira', 450.00));
        //$carrinhoDeCompras->adiciona(new Produto('Tv', 1200.00));
        //$carrinhoDeCompras->adiciona(new Produto('Smartphone', 3000.00));

        $maiorEMenor->encontra($carrinhoDeCompras);

        $this->assertEquals(450.00, $maiorEMenor->getMaior());
        $this->assertEquals(450.00, $maiorEMenor->getMenor());
        $this->assertInstanceOf('Aula\Model\MaiorEMenor', $maiorEMenor);
    }

    public function testMetodoEncontraEmOrdemDecrescente(): void
    {
        $maiorEMenor = new MaiorEMenor();
        $carrinhoDeCompras = new CarrinhoDeCompras();
        
        $carrinhoDeCompras->adiciona(new Produto('Smartphone', 3000.00));
        $carrinhoDeCompras->adiciona(new Produto('Tv', 1200.00));
        $carrinhoDeCompras->adiciona(new Produto('Geladeira', 450.00));

        $maiorEMenor->encontra($carrinhoDeCompras);

        $this->assertEquals(3000.00, $maiorEMenor->getMaior());
        $this->assertEquals(450.00, $maiorEMenor->getMenor());
        $this->assertInstanceOf('Aula\Model\MaiorEMenor', $maiorEMenor);
    }

    public function testMetodoEncontraEmOrdemAleatoria(): void
    {
        $maiorEMenor = new MaiorEMenor();
        $carrinhoDeCompras = new CarrinhoDeCompras();
        
        $carrinhoDeCompras->adiciona(new Produto('Smartphone', 3000.00));
        $carrinhoDeCompras->adiciona(new Produto('Geladeira', 450.00));
        $carrinhoDeCompras->adiciona(new Produto('Tv', 1200.00));

        $maiorEMenor->encontra($carrinhoDeCompras);

        $this->assertEquals(3000.00, $maiorEMenor->getMaior());
        $this->assertEquals(450.00, $maiorEMenor->getMenor());
        $this->assertInstanceOf('Aula\Model\MaiorEMenor', $maiorEMenor);
    }
}