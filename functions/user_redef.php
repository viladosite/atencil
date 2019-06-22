<?php
  if( empty($_GET['user']) || empty($_GET['confirmation']) )
    die('<p>Não é possível alterar a password: dados em falta</p>');
 
  // Inclui as informações de conexão
  require __DIR__ . '/../includes/at_core.php';
  
  $user = mysqli_real_escape_string($mysql, $_GET['user']);
  $hash = mysqli_real_escape_string($mysql, $_GET['confirmation']);
 
  $q = mysqli_query($mysql, "SELECT COUNT(*) FROM at_passredef WHERE user = '$user' AND confirmation = '$hash'");
 
  if( mysqli_num_rows($q) == 1 ){
    // os dados estão corretos: eliminar o pedido e permitir alterar a password
    mysqli_query($mysql, "DELETE FROM at_passredef WHERE user = '$user' AND confirmation = '$hash'");
 
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
        <input type="hidden" id="user" name="user" value='.$user.'>
      </form>
    ';

  } else {
    echo '<p>Não é possível alterar a password: dados incorretos</p>';
 
  }
 
?>