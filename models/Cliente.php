<?php
	namespace CursoPHPOO\models;

	class Cliente extends Pessoa
	{
		/*
		 * Nome / Endereço / Telefone / Escolaridade
		 */
		
		private $escolaridade;

		/**
		 * Método para setar escolaridade do Cliente
		 */
		public function setEscolaridade($escolaridade)
		{
			$this->escolaridade = $escolaridade;
		}

		/**
		 * Método para retornar o escolaridade do Cliente
		 */
		public function getEscolaridade()
		{
			return $this->escolaridade;
		}

		/**
		 * Método que sobrescreveu o método da Classe Pai (Pessoa)
		 */ 
		public function testePolimorfismo()
		{
			echo 'Essa é a função da classe Cliente';
		}

		/**
		 * Função que usa a palavra reservada parent para chamar o método testePolimorfismo da Classe Pai (Pessoa)
		 */ 
		public function teste()
		{
			parent::testePolimorfismo();
		}
	}
