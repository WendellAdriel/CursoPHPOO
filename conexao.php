<?php
    
	/*
	 * PDO - módulo PHP montado sobre o paradigma Orientado a Objetos
	 * que provê uma padronização da forma que o PHP se comunica com um BD
	 * surgiu a partir da versão 5
	 */
	
	/*
	 * private - acessados pela minha própria classe
	 * public - acessado de qualquer lugar do nosso programa
	 * protected - acessado pela própria classe e pelas classes filhas
	 */

    class Conexao {
    	private $host = 'localhost';
    	private $db = 'cursophpoo';
    	private $user = 'root';
    	private $password = 'connect';
        private $con;

    	public function __construct()
    	{
    		$this->con = new PDO("mysql:host=$this->host;dbname=$this->db", "$this->user", "$this->password");
    		
    		if(!$this->con){
        		die('Erro ao criar a conexão');
    		} else {
    			echo 'Conexão realizada com sucesso<br>';
    		}
   			
   			$this->con->exec("set names utf8");
    	}

        public function getCon()
        {
            return $this->con;
        }
    }