<?php

class FuncionarioQueMaisVendeuTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $funcionarios = collect([
            [
                'nome' => 'João',
                'email' => 'joao@exemplo.com.br',
                'pedidos' => [
                    ['cliente' => 'Mundo Roxo', 'total' => 7444],
                    ['cliente' => 'Remmer', 'total' => 1445],
                    ['cliente' => 'Vilas Bahia', 'total' => 700],
                ],
            ],
            [
                'nome' => 'Ana',
                'email' => 'ana@exemplo.com.br',
                'pedidos' => [
                    ['cliente' => 'Azus', 'total' => 203],
                    ['cliente' => 'McRonald', 'total' => 8730],
                    ['cliente' => 'Zebbras', 'total' => 3337],
                    ['cliente' => 'Reservado', 'total' => 5310],
                ],
            ],
            [
                'nome' => 'Gustavo',
                'email' => 'gustavo@exemplo.com.br',
                'pedidos' => [
                    ['cliente' => 'Chiaomi', 'total' => 1091],
                    ['cliente' => 'Ortobem', 'total' => 2370],
                ],
            ],
        ]);

        /*
         * Utilizando fluxo de collections, encontre o funcionário que teve 
         * a maior venda.
         *
         * Não utilize loops, ifs ou operadores ternários.
         * 
         * Boa sorte!
         *
         * $funcionarioComPedidoMaisValioso = $funcionarios->...
         */

        $this->assertEquals($funcionarioComPedidoMaisValioso['nome'], 'Ana');
    }
}
