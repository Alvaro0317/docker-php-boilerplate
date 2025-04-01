<?php

namespace Deg540\DockerPHPBoilerplate;

class ListaCompra
{

    public function getListaCompra(string $listaCompra): string
    {
        if(!str_contains($listaCompra, ', '))
        {
            $listaCompra = str_replace(' ', ', ', $listaCompra);
        }

        return $listaCompra;
    }
}
