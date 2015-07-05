<?php
	namespace CursoPHPOO\models;

	class Funcionario extends Pessoa
	{
		/*
		 * Nome / Endereço / Telefone / Email / Data Nascimento / Data Contratação
		 */
		
		private $email;
		private $data_nasc;
		private $data_cont;

		/**
		 * Método para setar email do Funcionario
		 */
		public function setEmail($email)
		{
			$this->email = $email;
		}

		/**
		 * Método para retornar email do Funcionario
		 */
		public function getEmail()
		{
			return $this->email;
		}

		/**
		 * Método para setar data de nascimento do Funcionario
		 */
		public function setDataNasc($data_nasc)
		{
			$this->data_nasc = $data_nasc;
		}

		/**
		 * Método para retornar data de nascimento do Funcionario
		 */
		public function getDataNasc()
		{
			return $this->data_nasc;
		}

		/**
		 * Método para setar data de contratação do Funcionario
		 */
		public function setDataCont($data_cont)
		{
			$this->data_cont = $data_cont;
		}

		/**
		 * Método para retornar data de contratação do Funcionario
		 */
		public function getDataCont()
		{
			return $this->data_cont;
		}

		/**
		 * Método que sobrescreveu o método da Classe Pai (Pessoa)
		 */ 
		public function testePolimorfismo()
		{
			echo 'Essa é a função da classe Funcionario';
		}

		/**
		 * Função que usa a palavra reservada parent para chamar o método testePolimorfismo da Classe Pai (Pessoa)
		 */ 
		public function teste()
		{
			parent::testePolimorfismo();
		}
	}
