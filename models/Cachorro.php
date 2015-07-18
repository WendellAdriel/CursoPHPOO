<?php
	namespace CursoPHPOO\models;
	require_once('Animal.php');

	class Cachorro extends Animal
	{
		private $numeroPatas;

		public function setNumeroPatas($numeroPatas)
		{
			$this->numeroPatas = $numeroPatas;
		}

		public function getNumeroPatas()
		{
			return $this->numeroPatas;
		}

		public function adotar()
		{
			echo "Cachorro adotado!";
		}
	}

	$cachorro = new Cachorro();
	$cachorro->setNome("Rex");
	echo $cachorro->getNome();

	echo '<hr>';
?>