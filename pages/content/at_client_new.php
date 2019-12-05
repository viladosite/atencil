<!-- MAIN CONTENT-->
<?php
    // Obter DDD padrão configurado para a empresa do usuário
    // $_SESSION['UserCompany']
    // $dddquery = "SELECT `configvalue1` FROM `at_config` WHERE (`configcomp` = '".$_SESSION['UserCompany'] ."') AND (`configname` = `DDD`)";
    // $ddd = mysqli_query($mysql, $dddquery);
    $ddd = '21';
    
?>
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <h3 class="title-5 m-b-35">Cadastrar Cliente</h3>

            <form action="../functions/client_create.php" method="post">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            
                            <div class="card-header">Grupo e Status</div>

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="status" class=" form-control-label">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="ativo">Ativo</option>
                                        <option value="inativo">Inativo</option>
                                        <option value="pendente">Pendente</option>
                                        <option value="potencial">Em Potencial</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="group" class=" form-control-label">Grupo</label>
                                    <select name="group" id="group" class="form-control">

                                        <?php
                                        // Monta os parâmetros da query
                                        $sqlgr = "SELECT * FROM `at_clientgroups` WHERE (`cligrcompany` = '".$_SESSION['UserCompany'] ."')";

                                        // Monta a query para execução
                                        $usergrs = mysqli_query($mysql, $sqlgr);

                                        // Executa o loop com a query
                                        foreach ($usergrs as $usergr) { ?>
                                        
                                        <option value="<?php echo $usergr['cligrid']; ?>">
                                            <?php echo $usergr['cligrname']; ?>
                                        </option>
                                        
                                        <?php } ?>

                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        
                        <div class="card">
                            <div class="card-header">Dados do Cliente</div>
                            
                            <div class="card-body card-block">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Primeiro Nome</div>
                                        <input type="text" id="pnome" name="pnome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Último Nome</div>
                                        <input type="text" id="unome" name="unome" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon col-md-4">Email</div>
                                        <input type="email" id="email" name="email" class="form-control">
                                        <div class="input-group-addon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-link">
                                    <i class="fa fa-link"></i>&nbsp; Campos Adicionais</button>
                                <hr>

                                <div class="row form-group">
                                    <div class="col-md-2 col-sm-6 d-flex justify-content-center">
                                        <span>País</span>
                                    </div>
                                    <div class="col-md-2 col-sm-6 d-flex justify-content-center">
                                        <span>DDD</span>
                                    </div>
                                    <div class="col-md-8 col-sm-12 d-flex justify-content-center">
                                        <span>Telefone</span>
                                    </div>
                                </div>
                                    
                                <div class="row form-group">
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddi1" id="ddi1" type="text" class="form-control" value="+55">
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddd1" id="ddd1" type="text" value="<?php echo $ddd; ?>"  class="form-control">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input name="tel1" id="tel1" type="tel" pattern="[0-9]*" placeholder="Telefone 1" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddi2" id="ddi2" type="text" class="form-control" value="+55">
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddd2" id="ddd2" type="text" value="<?php echo $ddd; ?>"  class="form-control">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input name="tel2" id="tel2" type="tel" pattern="[0-9]*" placeholder="Telefone 2" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddi3" id="ddi3" type="text" class="form-control" value="+55">
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddd3" id="ddd3" type="text" value="<?php echo $ddd; ?>"  class="form-control">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input name="tel3" id="tel3" type="tel" pattern="[0-9]*" placeholder="Telefone 3" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12"><span>Whatsapp</span></div>
                                </div>
                                
                                <div class="row form-group">
                                    <div class="col-md-2 col-sm-6">
                                        <input name="ddiz" id="ddiz" type="text" class="form-control" value="+55">
                                    </div>
                                    <div class="col-md-2 col-sm-6">
                                        <input name="dddz" id="dddz" type="text" value="<?php echo $ddd; ?>"  class="form-control">
                                    </div>
                                    <div class="col-md-8 col-sm-12">
                                        <input name="telz" id="telz" type="text" placeholder="Whatsapp" class="form-control">
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col-12"><span>Data de nascimento</span></div>
                                </div>

                                <div class="row form-group">
                                    
                                    <div class="col-3">
                                        <input name="dianasc" id="dianasc" type="text" class="form-control" placeholder="Dia" maxlength="2">
                                    </div>
                                    
                                    <div class="col-3">
                                        <select name="mesnasc" id="mesnasc" class="form-control">
                                            <option value="00">Mês</option>
                                            <option value="01">01 - Jan</option>
                                            <option value="02">02 - Fev</option>
                                            <option value="03">03 - Mar</option>
                                            <option value="04">04 - Abr</option>
                                            <option value="05">05 - Mai</option>
                                            <option value="06">06 - Jun</option>
                                            <option value="07">07 - Jul</option>
                                            <option value="08">08 - Ago</option>
                                            <option value="09">09 - Set</option>
                                            <option value="10">10 - Out</option>
                                            <option value="11">11 - Nov</option>
                                            <option value="12">12 - Dez</option>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <input name="anonasc" id="anonasc" type="text" class="form-control" placeholder="Ano (4 digitos)" maxlength="4">
                                    </div>

                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="endereco" class=" form-control-label">Endereço</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="endereco" id="endereco" rows="9" placeholder="Digite o endereço completo" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="obs" class=" form-control-label">Observações</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="obs" id="obs" rows="9" placeholder="Este campo não aparece para o Cliente." class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="form-actions form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        Cadastrar
                                    </button>
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>