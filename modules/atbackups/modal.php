<!-- INÍCIO do modal de Termos e Condições -->
<div class="modal fade" id="atbkpcreate" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel">AT Backup - Criar Backup</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="../modules/<?php echo $modrundir; ?>/functions/bkp_create.php" style="display: inline;" method="post">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="default-tab">

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="bkp-dados-tab" data-toggle="tab" href="#bkp-dados" role="tab" aria-controls="bkp-dados"
                                        aria-selected="true">Dados Básicos</a>
                                    <a class="nav-item nav-link" id="bkp-files-tab" data-toggle="tab" href="#bkp-files" role="tab" aria-controls="bkp-files"
                                        aria-selected="false">Arquivos</a>
                                    <a class="nav-item nav-link" id="bkp-db-tab" data-toggle="tab" href="#bkp-db" role="tab" aria-controls="bkp-db"
                                        aria-selected="false">Banco de Dados</a>
                                </div>
                            </nav>

                            <div class="tab-content pl-3 pt-2" id="bkp-tabs-content">

                                <div class="tab-pane fade show active" id="bkp-dados" role="tabpanel" aria-labelledby="bkp-dados-tab">
                                    <div class="form-group">
                                        <label for="bkpname" class=" form-control-label">Nome do Backup</label>
                                        <input type="text" id="bkpname" name="bkpname" placeholder="Nome para identificação" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpwebsite" class=" form-control-label">Website</label>
                                        <input type="text" id="bkpwebsite" name="bkpwebsite" placeholder="seuwebsite.com.br" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpcomp" class=" form-control-label">Empresa</label>
                                        <select id="bkpcomp" name="bkpcomp" class="form-control">
                                            <option value='<?php compinfo_byid($_SESSION['UserCompany'], 'companyid') ?>'>
                                                <?php compinfo_byid($_SESSION['UserCompany'], 'companyname') ?>
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpobs" class=" form-control-label">Observações</label>
                                        <textarea id="bkpobs" name="bkpobs" rows="9" placeholder="Observações adicionais" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bkp-files" role="tabpanel" aria-labelledby="bkp-files-tab">
                                    <div class="form-group">
                                        <label for="bkpftphost" class=" form-control-label">Servidor FTP</label>
                                        <input type="text" id="bkpftphost" name="bkpftphost" placeholder="ftp.seuwebsite.com.br" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpftpuser" class=" form-control-label">Login/Usuário FTP</label>
                                        <input type="text" id="bkpftpuser" name="bkpftpuser" placeholder="seuusuario" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpftppass" class=" form-control-label">Senha FTP</label>
                                        <input type="password" id="bkpftppass" name="bkpftppass" placeholder="Digite a senha do FTP" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpftpport" class=" form-control-label">Porta FTP</label>
                                        <input type="text" id="bkpftpport" name="bkpftpport" value="21" placeholder="21 conexão comum / 22 conexão segura-ssl" class="form-control">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="bkp-db" role="tabpanel" aria-labelledby="bkp-db-tab">
                                    <div class="form-group">
                                        <label for="bkpdbhost" class=" form-control-label">Servidor MYSQL</label>
                                        <input type="text" id="bkpdbhost" name="bkpdbhost" placeholder="Servidor para acesso externo MYSQL" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpdbname" class=" form-control-label">Nome do Banco</label>
                                        <input type="text" id="bkpdbname" name="bkpdbname" placeholder="Nome do banco de dados MYSQL" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpdbuser" class=" form-control-label">Login/Usuário MYSQL</label>
                                        <input type="text" id="bkpdbuser" name="bkpdbuser" placeholder="Usuário do Banco de Dados" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpdbpass" class=" form-control-label">Senha MYSQL</label>
                                        <input type="password" id="bkpdbpass" name="bkpdbpass" placeholder="Digite a senha do MYSQL" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="bkpdbport" class=" form-control-label">Porta MYSQL</label>
                                        <input type="text" id="bkpdbport" name="bkpdbport" value="3306" placeholder="Padrão Mysql - 3306" class="form-control">
                                    </div>
                                </div>

                            </div>

                            <!-- Inputs para passagem de dados básicos do mod -->
                            <input type="hidden" id="modid" name="modid" value="<?php echo $modrunid; ?>">
                            <input type="hidden" id="moddir" name="moddir" value="<?php echo $modrundir; ?>">
                            <input type="hidden" id="modtable" name="modtable" value="<?php echo $modruntable; ?>">

                        </div>
                    </div>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- FIM do modal de Termos e Condições -->