<div class="main-content">
    <div class="section__content section__content--p30 ">
        <div class="form-group">
            <label for="nome" class="control-label mb-1">Pedido</label>
            <input disabled id="nome" name="usuario_logado" type="text" placeholder="" value="<?php echo $pedido ?>" class="form-control" required>
        </div>
        <div class="container-fluid ">
            <div class="row ">
                <div class="col-lg-6 aumento">
                    <div class="card aumento">
                        <div class="card-header">cadastro Erros Aereo</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Lançar Erro Encontrado
                                </h3>
                            </div>
                            <hr>
                            <form action="../../model/routePedidoAuditoriaResumo.php" method="post" novalidate="novalidate">

                                <div class="form-group">
                                    <label for="nome" class="control-label mb-1">usuario</label>
                                    <input id="nome" name="usuario_logado" type="text" placeholder="" value="<?php echo $_SESSION['usuario'] ?>" class="form-control" required>
                                </div>
                                <div class="form-group has-success">
                                    <label for="i0_filial" class="control-label mb-1">Filial</label>
                                    <select class="form-control" name="i0_filial" aria-label="Default select example">
                                        <option selected disabled>Selecione
                                        </option>
                                        <option>Armazem mateus S.A CD-87</option>
                                        <option>Armazem mateus S.A CD-81</option>
                                        <option>Armazem mateus S.A CD-116</option>
                                        <option>Armazem mateus S.A CD-331</option>
                                        <option>Armazem mateus S.A CD-101</option>
                                    </select>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="tipo_auditoria" class="control-label mb-1">Codigo Auditor</label>
                                                <input id="data" name="codigo_auditor" type="numbler" class="form-control cc-exp" value="" data-val="true" data-val-required="Please enter the card expiration" data-val-cc-exp="Please enter a valid month and year" placeholder="MM / YY" autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="cid" class="control-label mb-1">Cidade</label>
                                            <div class="input-group">
                                                <input name="cid" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="rua" class="control-label mb-1">Rua</label>
                                            <div class="input-group">
                                                <input id="" name="rua" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="rua" class="control-label mb-1">Total De Objetos</label>
                                            <div class="input-group">
                                                <input id="total_objetos" name="total_objetos" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="objetos_nao_conforme" class="control-label mb-1">Total De Objetos</label>
                                            <div class="input-group">
                                                <input id="objetos_nao_conforme" name="objetos_nao_conforme" required placeholder="" type="numbler" class="form-control cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" onKeyPress="valor()" autocomplete="off">
                                            </div>
                                        </div><br><br><br>
                                    </div>
                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Salvar</span>
                                            <span id="payment-button-sending" style="display:none;">Sending…</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12">
            <!-- DATA TABLE -->

            <h3 class="title-5 m-b-35">data table</h3>
            <div class="table-data__tool">
                <div class="table-data__tool-left">
                    <div class="rs-select2--light rs-select2--md">
                        <select class="js-select2" name="property">
                            <option selected="selected">All Properties</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <div class="rs-select2--light rs-select2--sm">
                        <select class="js-select2" name="time">
                            <option selected="selected">Today</option>
                            <option value="">3 Days</option>
                            <option value="">1 Week</option>
                        </select>
                        <div class="dropDownSelect2"></div>
                    </div>
                    <button class="au-btn-filter">
                        <i class="zmdi zmdi-filter-list"></i>filters</button>
                </div>
                <div class="table-data__tool-right">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="zmdi zmdi-plus"></i>add item</button>
                    <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                        <select class="js-select2" name="type">
                            <option selected="selected">Export</option>
                            <option value="">Option 1</option>
                            <option value="">Option 2</option>
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
                            <th>name</th>
                            <th>email</th>
                            <th>description</th>
                            <th>date</th>
                            <th>status</th>
                            <th>price</th>
                            <th></th>
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
                            <td>Lori Lynch</td>
                            <td>
                                <span class="block-email">lori@example.com</span>
                            </td>
                            <td class="desc">Samsung S8 Black</td>
                            <td>2018-09-27 02:12</td>
                            <td>
                                <span class="status--process">Processed</span>
                            </td>
                            <td>$679.00</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>Lori Lynch</td>
                            <td>
                                <span class="block-email">john@example.com</span>
                            </td>
                            <td class="desc">iPhone X 64Gb Grey</td>
                            <td>2018-09-29 05:57</td>
                            <td>
                                <span class="status--process">Processed</span>
                            </td>
                            <td>$999.00</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>Lori Lynch</td>
                            <td>
                                <span class="block-email">lyn@example.com</span>
                            </td>
                            <td class="desc">iPhone X 256Gb Black</td>
                            <td>2018-09-25 19:03</td>
                            <td>
                                <span class="status--denied">Denied</span>
                            </td>
                            <td>$1199.00</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="spacer"></tr>
                        <tr class="tr-shadow">
                            <td>
                                <label class="au-checkbox">
                                    <input type="checkbox">
                                    <span class="au-checkmark"></span>
                                </label>
                            </td>
                            <td>Lori Lynch</td>
                            <td>
                                <span class="block-email">doe@example.com</span>
                            </td>
                            <td class="desc">Camera C430W 4k</td>
                            <td>2018-09-24 19:10</td>
                            <td>
                                <span class="status--process">Processed</span>
                            </td>
                            <td>$699.00</td>
                            <td>
                                <div class="table-data-feature">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                        <i class="zmdi zmdi-mail-send"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="More">
                                        <i class="zmdi zmdi-more"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>