<?php
	namespace CursoPHPOO\models;
	use PDO;

	spl_autoload_register(function($class) {
		//CursoPHPOO\models\Database
		$params = explode("\\", $class);
  		$class = end($params);
  		require_once($class . '.php');
	});

	class MySqlDatabase implements Database, ConexaoDBCurso
	{
		private $con;

		public function getCon()
		{
			return $this->con;
		}

		public function conectar($host = ConexaoDBCurso::HOST, $db = ConexaoDBCurso::DB, $user = ConexaoDBCurso::USER, $password = ConexaoDBCurso::PASSWORD)
		{
			$this->con = new PDO("mysql:host=$host;dbname=$db", "$user", "$password");

    		if(!$this->con){
        		die('Erro ao criar a conexão');
    		} else {
    			echo 'Conexão realizada com sucesso <hr>';
    		}

   			$this->con->exec("set names utf8");
		}

		public function salvarRegistro($tabela, $registro)
		{
			echo "Salva $registro na tabela: $tabela <hr>";
		}

		public function listarRegistros($tabela)
		{
			echo "Lista todos registros da tabela: $tabela <hr>";
		}

		public function procurarRegistros($tabela, $registro)
		{
			echo "Busca $registro na tabela: $tabela <hr>";
		}

		public function removerRegistro($tabela, $registro)
		{
			echo "Remove $registro da tabela: $tabela <hr>";
		}
	}

	$conexao = new MySqlDatabase();
	$conexao->conectar();
	$conexao->listarRegistros("Cliente");
	$conexao->salvarRegistro("Funcionario", "José");
	$conexao->procurarRegistros("Cliente", "Pedro");
	$conexao->removerRegistro("Funcionario", "Maria");