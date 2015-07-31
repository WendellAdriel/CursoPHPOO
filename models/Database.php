<?php
	namespace CursoPHPOO\models;
	/*
	 * Interfaces são usadas no PHP para definir quais métodos uma classe deve implementar
	 * Muito usadas, já que uma classe pode implementar várias interfaces
	 * Podem ter constantes, são definidas usando a palavra interface
	 * Todos métodos devem ser públicos e devem conter apenas a assinatura
	 * Interfaces podem herdar outra interface
	 */
	interface Database
	{
		public function salvarRegistro($tabela, $registro);
		public function listarRegistros($tabela);
		public function procurarRegistros($tabela, $registro);
		public function removerRegistro($tabela, $registro);
	}
