<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            <!-- DATA TABLE -->
            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="grupo">
                            <option selected="selected">Grupos</option>
                            <option value="">Funcionários</option>
                            <option value="">Gerentes</option>
                            <option value="">Diretores</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="tempo">
                            <option selected="selected">Tempo</option>
                            <option value="">Hoje</option>
                            <option value="">Últimos 7 dias</option>
                            <option value="">Últimos 30 dias</option>
                            <option value="">Últimos 365 Dias</option>
                            <option value="">Todos os períodos</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filtros
                    </button>
                </div>

                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>Cadastrar Usuário</button>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Exportar</option>
                            <option value="">Todos os Usuários</option>
                            <option value="">Apenas os selecionados</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                </div>
            </div>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </th>
                            <th>nome</th>
                            <th>email</th>
                            <th>cadastrado</th>
                            <th>grupo</th>
                            <th>ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>

                            <td>Usuário 1</td>

                            <td><span class="block-email">email@email.com</span></td>

                            <td>2018-09-27 02:12</td>

                            <td>Funcionários</td>
                            
                            <td>
                                <div class="table-data-feature">

                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>

                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>

                                </div>
                            </td>
                        </tr>

                        <tr class="spacer"></tr>

                    </tbody>
                </table>
            </div>
            <!-- END DATA TABLE -->
        	
        </div>
    </div>
</div>