<?php
	// Tenta se conectar ao servidor MySQL
	
	// get the database connection
    function getConnection(){
 
        $conn = null;
 
        try{
            $conn = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
            
        }catch(PDOException $exception){
            die($exception->getMessage());
            
        }
 
        return $conn;
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