<?php

/**
 * Classe de conexão com o banco de dados
 */
class DbConnect
{

	private $con;

	function __construct()
	{
	}

	/**
	 * Método responsável por realizar a conexão com o banco de dados MySQL
	 *
	 */
	function connect()
	{
		include_once dirname(__FILE__) . '/Constants.php';

		$this->con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		if (mysqli_connect_errno()) {
			echo "Falha de conexão com o MySQL: " . mysqli_connect_error();
		}

		return $this->con;
	}
}
