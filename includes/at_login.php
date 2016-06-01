<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
        header("Location: /index.php"); exit;
    }
      


//Monta as variáveis para os campos do form
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$nome = $_POST['nome'];



// Define as variáveis com a configuração do banco de dados
$dbserver = 'localhost';
$dbname = 'atencilt_usuario';
$dbuser = 'atencilt_usuario';
$dbpass = '78964123Vi';



// Tenta se conectar ao servidor MySQL
$mysql = mysql_connect($dbserver, $dbuser, $dbpass, $dbname) or trigger_error(mysql_error());

// Tenta se conectar a um banco de dados MySQL
    mysql_select_db($dbname) or trigger_error(mysql_error());


// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());

// Query que da um select no banco e se encontrar algo diferente de 1 como resultado, retorna erro
	$sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";

    $query = mysql_query($sql);
	
    if (mysql_num_rows($query) != 1) {

// Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
	echo '<script type="text/javascript"> 
    window.alert("Dados incorretos, tente novamente ou procure o administrador do sistema.");
    window.history.back();
    </script>';


// Caso a resposta do select seja 1, o sistema encontrou o usuário, portanto salva os dados encontrados na sessão e redireciona o visitante para a devida página

    } else {

		// Salva os dados encontados na variável $resultado
        $resultado = mysql_fetch_assoc($query);
      
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();
      
        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['id'];
        $_SESSION['UsuarioNome'] = $resultado['nome'];
        $_SESSION['UsuarioNivel'] = $resultado['nivel'];
      
        // Redireciona o visitante
        header("Location: /dashboard.php"); exit;
    }

?>