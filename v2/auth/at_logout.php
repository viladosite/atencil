<?php
session_start();
//		if(isset($_SESSION)){ // Verifica a sessão e caso não esteja iniciada a inicia
session_destroy(); // Destrói a sessão limpando todos os valores salvos
header("Location: ../index.php"); // Redireciona o visitante
exit();
//		}
?>