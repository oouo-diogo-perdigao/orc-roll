<?php
namespace Test;

/**
 * A sequência de fibonacci é uma série de numeros onde
 * cada número consecutivo é a soma dos dois números anteriores.
 * 
 * Exemplo: [0, 1, 1, 2, 3, 5, 8, 13, 21, 34, ∞]
 * 
 * Construa um código seguindo as especificações abaixo, que
 * encontre através do índice, o número da sequência de fibonacci.
 * 
 * @method static int numero(int $indice)
 * @example Fibonacci::numero(7) === 13
 */
final class Fibonacci
{
	/**
	 * Retorna valor de fibonacci correspondente ao indice
	 * @param [type] $indice
	 * @return int
	 */
	public static function numero($indice) {
		if ($indice==0) {
			return 0;
		} else if ($indice==1) {
			return 1;
		}
		return Fibonacci::numero($indice-1)+Fibonacci::numero($indice-2);
	}
}