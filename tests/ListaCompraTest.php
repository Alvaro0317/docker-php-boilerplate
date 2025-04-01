<?php

namespace Deg540\DockerPHPBoilerplate\Test;

use Deg540\DockerPHPBoilerplate\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{

    private ListaCompra $listaCompra;
    protected function setUp(): void
    {
        parent::setUp();
        $this->listaCompra = new ListaCompra();
    }
    /**
     * @test
     */
    public function givenStringListaCompraReturnStringListaCompra(): void
    {
        $this->assertEquals('Manzana', $this->listaCompra->getListaCompra('Manzana'));
    }

}
