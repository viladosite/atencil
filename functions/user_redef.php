<?php
  if( empty($_GET['user']) || empty($_GET['confirmation']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
  // Inclui as informações de conexão
  require __DIR__ . '/../includes/at_core.php';
  
  // escolher a base de dados pretendida
  mysql_select_db('atencil');
 
  $user = mysql_real_escape_string($_GET['user']);
  $hash = mysql_real_escape_string($_GET['confirmation']);
 
  $q = mysql_query("SELECT COUNT(*) FROM at_passredef WHERE user = '$user' AND confirmation = '$hash'");
 
  if( mysql_result($q, 0, 0) == "1" ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    mysql_query("DELETE FROM at_passredef WHERE user = '$user' AND confirmation = '$hash'");
 
    echo '
      <form action="/functions/user_pass.php" method="post">
        <div class="form-group">
          <label>Nova senha</label>
          <input class="au-input au-input--full" type="password" name="newpass" placeholder="Digite uma NOVA senha">
        </div>
        <div class="form-group">
          <label>Repita a nova senha</label>
          <input class="au-input au-input--full" type="password" name="repnewpass" placeholder="REPITA a nova senha">
        </div>
        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Enviar</button>
        <input type="hidden" id="user" name="user" value='$user'>
      </form>
    ';

  } else {
    echo '<p>Não é possível alterar a password: dados incorretos</p>';
 
  }
 
?>