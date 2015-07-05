<?php
	namespace CursoPHPOO\models;

	class Pessoa {
		private $nome;
		private $endereco;
		private $telefone;

		/**
		 * Método para setar o nome da Pessoa
		 */
		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		/**
		 * Método para retornar o nome da Pessoa
		 */
		public function getNome()
		{
			return $this->nome;
		}

		/**
		 * Método para setar o endereço da Pessoa
		 */
		public function setEndereco($endereco)
		{
			$this->endereco = $endereco;
		}

		/**
		 * Método para retornar o endereço da Pessoa
		 */
		public function getEndereco()
		{
			return $this->endereco;
		}

		/**
		 * Método para setar o telefone da Pessoa
		 */
		public function setTelefone($telefone)
		{
			$this->telefone = $telefone;
		}

		/**
		 * Método para retornar o telefone da Pessoa
		 */
		public function getTelefone()
		{
			return $this->telefone;
		}

		/**
		 * Método que imprime mensagem e que vai ser sobrescrevido pelas Classes Filhas
		 */ 
		public function testePolimorfismo()
		{
			echo 'Essa é a função da classe Pessoa';
		}
	}
?>