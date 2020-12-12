<?php

class ListaEmailsTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        $funcionarios = collect([
            ['nome' => 'Pedro', 'departamento' => 'Financeiro', 'email' => 'pedro@exemplo.com.br'],
            ['nome' => 'Diana', 'departamento' => 'Marketing', 'email' => 'diana@exemplo.com.br'],
            ['nome' => 'Flávio', 'departamento' => 'Marketing', 'email' => 'flavio@exemplo.com.br'],
            ['nome' => 'João', 'departamento' => 'TI', 'email' => 'joao@exemplo.com.br'],
            ['nome' => 'Marcos', 'departamento' => 'Marketing', 'email' => 'marcos@exemplo.com.br'],
            ['nome' => 'Ana', 'departamento' => 'TI', 'email' => 'ana@exemplo.com.br'],
        ]);

        /*
         * Escreva um fluxo de collection que retorne os endereços de email
         * de todos os empregados do departamento de Marketing.
         * 
         * Você não pode utilizar loops, ifs e operadores ternários.
         * 
         * Boa sorte!
         * 
         * $emails = $funcionarios->...
         */

        $this->assertEquals([
            'diana@exemplo.com.br',
            'flavio@exemplo.com.br',
            'marcos@exemplo.com.br',
        ], $emails->all());
    }
}
