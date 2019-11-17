<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                
                <div class="login-logo">
                    <a href="index.php">
                        <img src="images/logo_atencil_horiz.png" alt="Atencil">
                    </a>
                </div>
                
                <div class="login-form">
                    <p>Você ainda não possui um arquivo de configuração para o ATENCIL.</p>
                    <br>
                    <p> Vamos precisar de alguns dados para acessar seu servidor MYSQL:</P>
                    <br>
                    <form action="install_script.php" method="post">
                        <div class="form-group">
                            <input class="au-input au-input--full" type="text" name="dbhost" placeholder="Endereço do servidor">
                        </div>

                        <div class="form-group">
                            <input class="au-input au-input--full" type="text" name="dbuser" placeholder="Nome do Usuário">
                        </div>

                        <div class="form-group">
                            <input class="au-input au-input--full" type="password" name="dbpass" placeholder="Senha do Usuário">
                        </div>

                        <div class="form-group">
                            <input class="au-input au-input--full" type="text" name="dbname" placeholder="Nome do Banco de Dados">
                        </div>

                        <!--
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="aggree">Concordo com os <a href="#" data-toggle="modal" data-target="#modalterms">termos e condições</a>
                            </label>
                        </div>
                        -->

                        <button class="au-btn au-btn--block au-btn--blue m-b-20" type="submit">Instalar</button>

                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>