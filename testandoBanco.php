<?php
	namespace CursoPHPOO;

	use Conexao;

	require_once('Conexao.php');

	$conexao = new Conexao();

	$nome = "André";
	$endereco = "Endereço de teste número 2";
	$telefone = "(34)2354-7789";

	$sql = "INSERT INTO pessoa (nome, endereco, telefone) VALUES (:nome, :endereco, :telefone)";

	$stmte = $conexao->getCon()->prepare($sql);
	$stmte->bindParam(":nome", $nome);
	$stmte->bindParam(":endereco", $endereco);
	$stmte->bindParam(":telefone", $telefone);

	if ($stmte === false) {
		echo "Falha em preparar statement: (". print_r($this->getCon()->errorInfo()).")\n"; 
	}

	$query = $stmte->execute();

	if($query === false){
           		echo "Falha em executar query: \n=======\n"; 
                	$arr = $stmte->errorInfo(); 
	                print_r($arr); 
	                echo "\n========\n"; 
    } else {
       			echo "Insert realizado com sucesso!<br><br><br>";
    	}

    $sql = "SELECT * FROM pessoa ORDER BY nome";
    $pessoas = $conexao->getCon()->query($sql)->fetchAll();

    if (!$pessoas) {
    	print_r($conexao->getCon()->errorInfo());
   	}
	
	foreach ($pessoas as $pessoa){
    	echo "Nome: " . $pessoa["nome"] . "<br>";
    	echo "Endereço: " . $pessoa["endereco"] . "<br>";
    	echo "Telefone: " . $pessoa["telefone"] . "<br>";
    	echo "<hr>";
	}

?>