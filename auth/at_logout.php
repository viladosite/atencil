<?php
session_start();

// Destrói a sessão limpando todos os valores salvos
session_destroy();

// Retorna o aviso de que foi deslogado
echo '<script type="text/javascript">window.alert("Você foi deslogado do sistema.");</script>';

// Redireciona o usuário
header("Location: ../index.php");

exit();

?>