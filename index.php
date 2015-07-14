<?php
	/*
	class Casa
	{
		public $tamanho;
		public $valor;

		public function setTamanho($tamanho)
		{
			$this->tamanho = $tamanho;
		}

		public function getValor()
		{
			return $this->valor;
		}

		public function __construct() {}
	}

	$objeto = new Casa();
	$objeto->tamanho = "50 metros quadrados";
	$objeto->valor = "R$100.000,00";

	$objeto2 = new Casa();
	$objeto2->tamanho = "100 metros quadrados";
	$objeto2->valor = "R$180.000,00";

	$objeto->setTamanho("200 metros quadrados");
	echo $objeto2->getValor();
	var_dump($objeto);
	var_dump($objeto2);
	*/

	namespace CursoPHPOO;

	use CursoPHPOO\models\Pessoa;
	use CursoPHPOO\models\Funcionario;
	use CursoPHPOO\models\Cliente;

	require_once('models/Pessoa.php');
	require_once('models/Funcionario.php');
	require_once('models/Cliente.php');
	require_once('conexao.php');

	$cliente = new Cliente();
	$funcionario = new Funcionario();

	$cliente->setNome('Wendell');
	$funcionario->setNome('Adriel');
	
	echo $cliente->getNome() . ' / ' . $funcionario->getNome();
	echo '<br/><hr/><br/>';
	
	$cliente->testePolimorfismo();
	echo '<br/><hr/><br/>';
	$cliente->teste();

	echo '<br/><hr/><br/>';

	$funcionario->testePolimorfismo();
	echo '<br/><hr/><br/>';
	$funcionario->teste();

	
?>