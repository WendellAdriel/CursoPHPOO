<?php
	namespace CursoPHPOO\models;

	spl_autoload_register(function($class) {
		$params = explode("\\", $class);
  		$class = end($params);
  		require_once($class . '.php');
	});

	class Exemplo
	{
		use Email, Sms
		{
			Sms::enviar insteadof Email;
			Email::enviar as enviarEmail;
		}


		private $mensagem;

		public function setMensagem($mensagem)
		{
			$this->mensagem = $mensagem;
		}

		public function getMensagem()
		{
			return $this->mensagem;
		}

		public function setDestinatario($destinatario)
		{
			$this->destinatario = $destinatario;
		}

		public function getDestinatario()
		{
			return $this->destinatario;
		}
	}

	$exemplo = new Exemplo();
	$exemplo->setDestinatario('Wendell');
	$exemplo->setMensagem('Olá ' . $exemplo->getDestinatario());
	$exemplo->enviar();
	echo '<hr>';
	$exemplo->enviarEmail();