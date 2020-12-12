<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

// namespace Test;

//PHPUnit_Framework_TestCase
class ClienteMaisValiosoTest extends TestCase {
	public function test() {
		$funcionarios = collect([
			[
					'name' => 'João',
					'email' => 'joao@exemplo.com.br',
					'pedidos' => [
							['cliente' => 'Remmer', 'total' => 7444],
							['cliente' => 'Mamão Vermelho', 'total' => 1445],
							['cliente' => 'Pneu Azul', 'total' => 700],
					],
			],
			[
					'name' => 'Ana',
					'email' => 'ana@exemplo.com.br',
					'pedidos' => [
							['cliente' => 'Banana', 'total' => 203],
							['cliente' => 'Pneu Azul', 'total' => 8730],
							['cliente' => 'Remmer', 'total' => 3337],
							['cliente' => 'Mundo Roxo', 'total' => 5310],
					],
			],
			[
					'name' => 'Renato',
					'email' => 'renato@exemplo.com.br',
					'pedidos' => [
							['cliente' => 'The Acute Toaster Company', 'total' => 1091],
							['cliente' => 'Mundo Roxo', 'total' => 2370],
					],
			],
			[
				'name' => 'Walcir',
				'email' => 'walcir@exemplo.com.br',
				'pedidos' => [
					['cliente' => 'Mundo Roxo', 'total' => 203],
					['cliente' => 'Pneu Azul', 'total' => 8730],
					['cliente' => 'Zebbras', 'total' => 3337],
					['cliente' => 'Pets', 'total' => 5310],
				],
			],
			[
				'name' => 'Luiz',
				'email' => 'luiz@exemplo.com.br',
				'pedidos' => [
					['cliente' => 'Banana', 'total' => 1091],
					['cliente' => 'Mundo Roxo', 'total' => 2370],
				],
			],
		]);

		/**
		 * Utilizando fluxo de collection, encontre o cliente que o valor total combinado
		 * do pedido seja o mais alto.
		 * 
		 * Não utilize loops, ifs ou operadores ternários.
		 *
		 * Boa sorte!
		 *
		 * $clienteMaisValioso = $funcionarios->...
		 */
		$this->assertEquals('Pneu Azul', $clienteMaisValioso);
	}

	// public function assertEquals($client, $clienteMaisValioso){
	// }
}
