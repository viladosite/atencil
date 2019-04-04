<?php

// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['fieldemail']) OR empty($_POST['fieldpass']))) {
        header("Location: ../index.php"); exit;
    }


// Check connection
if (!$mysql) {
    die("A Conexão Falhou: " . mysqli_connect_error());
}

// Monta os dados enviados nos campos em variáveis
$formemail = $_POST['email'];
$formsenhaatual = $_POST['senhaatual'];
$formsenhanova = $_POST['senhanova'];



$checauser = "SELECT * FROM `at_users` WHERE (`userid` = '".$_SESSION['UserID'] ."') AND (`userpass` = '". sha1($) ."') AND (`userstatus` = 1) LIMIT 1";

$checasenha = if (sha1($_POST['senhaatual']) !=  )

$useredit = "UPDATE at_users SET usermail='Doe' WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>