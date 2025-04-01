<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{

    public function getListaCompra(string $listaCompra): string
    {
        $listaCompra = str_replace(' ', ', ', $listaCompra);
        return $listaCompra;
    }
}
