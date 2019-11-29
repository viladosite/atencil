<?php

class Database{
	// Tenta se conectar ao servidor MySQL
	public $conn;

	// get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erro na conexão: " . $exception->getMessage();
        }
 
        return $this->conn;
    }

}



/*if ( defined('DB_HOST') && defined('DB_USER') && defined('DB_PASS') && defined('DB_NAME') ){
    $mysql = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    mysqli_select_db($mysql, DB_NAME);
} else {
    trigger_error('Os dados de acesso ao banco não foram encontrados', E_USER_ERROR);
}

// Definições extras de charset para a conexão
mysqli_query($mysql, "SET NAMES 'utf8'");
mysqli_query($mysql, 'SET character_set_connection=utf8');
mysqli_query($mysql, 'SET character_set_client=utf8');
mysqli_query($mysql, 'SET character_set_results=utf8');*/

?>