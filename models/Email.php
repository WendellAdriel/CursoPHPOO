<?php
	namespace CursoPHPOO\models;

	/*
	 * Traits foram introduzidas no PHP 5.4
	 * São mecanismos para reutilização de código
	 * Utilizadas em linguagens com herança simples
	 * Tem por objetivo diminuir as limitações que a herança simples traz
	 * Não podem ser instanciadas
	 * Uma classe pode usar várias traits
	 * Tem acesso a todos métodos e atributos privados da classe e vice-versa
	 * Podem ter métodos abstratos
	 * Podem utilizar outras Traits
	 * O método definido na trait sobrescreve o método herdado da classe pai
	 * O método da classe sobrescreve o método da trait
	 */
	trait Email
	{
		private $destinatario;

		public function enviar()
		{
			echo 'Mensagem: ' . $this->mensagem . ' / Enviada para: ' . $this->destinatario;
		}
	}