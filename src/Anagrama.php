<?php
namespace Test;

/**
 * Duas palavras são anagramas se os mesmos caracteres existirem em ambas palavras.
 * Apenas caracteres minúsculos, sem espaços ou pontuação deverão ser considerados.
 * 
 * Construa o método seguindo as especificações abaixo, que confira
 * se duas palavras são anagramas.
 * 
 * @method static bool conferir(string $primeira, string $segunda)
 * @example Anagrama::conferir('brasil', 'libras') === true
 * @example Anagrama::conferir('galo', 'logo') === false
 * @example Anagrama::conferir('Amor', 'roma') === true
 */
final class Anagrama
{
	/**
	 * Verifica se palavras são anagramas, ignora caracteres especiais e não diferencia minúsculos
	 * @param [string] $primeira
	 * @param [string] $segunda
	 * @return boolean
	 */
	public static function conferir($primeira, $segunda) {
		//Remove caracters especiais e converte maiúsculos para minúsculos
		$primeira = preg_replace('/[^a-z0-9\-]/', '', strtolower($primeira));
		$segunda = preg_replace('/[^a-z0-9\-]/', '', strtolower($segunda));

		if (strlen($primeira) != strlen($segunda)) {
			return false; 
		}

		//Trata strings como arrays de [letra] => qtd letras
		$array1 = str_split($primeira);
		$array2 = str_split($segunda);
		$arrayCompare1 = [];
		$arrayCompare2 = [];
		for ($i = count($array1); $i >= 0; $i--) {
			if ($arrayCompare1[$array1[$i]]) {
				$arrayCompare1[$array1[$i]]++;
			} else {
				$arrayCompare1[$array1[$i]] = 1;
			}
			if ($arrayCompare2[$array2[$i]]) {
				$arrayCompare2[$array2[$i]]++;
			} else {
				$arrayCompare2[$array2[$i]] = 1;
			}
		}
		//Verificação rápida de mesma quantidade de variedade de letras
		if (count($arrayCompare1)!=count($arrayCompare2)) {
			return false;
		}
		//Verificação de anagrama
		foreach ($arrayCompare1 as $key => $value) {
			if ($arrayCompare2[$key] != $value) {
				return false;
			}
		}
		return true;
	}
}