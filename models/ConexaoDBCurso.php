<?php
	namespace CursoPHPOO\models;

	interface ConexaoDBCurso
	{
		const HOST = 'localhost';
		const DB = 'cursophpoo';
		const USER = 'root';
		const PASSWORD = 'connect';

		public function conectar($host, $db, $user, $password);
	}