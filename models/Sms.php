<?php
	namespace CursoPHPOO\models;

	trait Sms
	{
		private $destinatario;

		public function enviar()
		{
			echo 'SMS: ' . $this->mensagem . ' / Enviado para: ' . $this->destinatario;
		}
	}