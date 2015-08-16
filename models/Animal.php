<?php
	namespace CursoPHPOO\models;

	abstract class Animal
	{
		private $nome;
		private $idade;

		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		public function getNome()
		{
			return $this->nome;
		}

		public function setIdade($idade)
		{
			$this->idade = $idade;
		}

		public function getIdade()
		{
			return $this->idade;
		}

		abstract protected function adotar();
	}

	/*
	 * Introduzidas no PHP 5
	 * Não podem ser instanciados
	 * Deve conter pelo menos um método abstrato
	 * Uma classe com um método abstrato sempre deve ser declarada como Classe Abstrata
	 * Métodos definidos como abstratos devem simplesmente declarar a assinatura do método
	 * Todos métodos abstratos devem ser implementados na primeira Classe filha não abstrata
	 * Os métodos implementados nas classes filhas devem ter visibilidade igual ou menos restrita
	 */
?>