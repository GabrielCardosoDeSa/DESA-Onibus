<?php

namespace onibus\view;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/controller/InitialController.php');



use onibus\InitialController;

?>

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/view/include/header.php'); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/view/include/top-page.php'); ?>

    <div id="main-content">
        <div class="container-fluid">

            <div class="block-header">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">                        
                        <h2>Cadastros</h2>
                    </div>            
                    <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="#"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item">Cadastros</li>
                            <li class="breadcrumb-item active">Motoristas</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card open_task">

                        <div class="header">
                            <h2>Cadastro de motoristas</h2>
                            <ul class="header-dropdown">
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>                                                              
                            </ul>
                        </div>

                        <div class="body">
                            <ul class="nav nav-tabs-new2">
                                <li class="nav-item inlineblock"><a class="nav-link active" data-toggle="tab" href="#details" aria-expanded="true">Tabela</a></li>                                
                                <li class="nav-item inlineblock"><a class="nav-link" data-toggle="tab" href="#history" aria-expanded="false">Formulário</a></li>
                            </ul>

                            <div class="tab-content m-t-50">
                                <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">                                   
                                    <div class="table-responsive">
                                        <table class="table table-hover js-basic-example dataTable table-custom">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th class="width10 th-none">
                                                        <label class="fancy-checkbox">
                                                            <input class="select-all" type="checkbox" name="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </th>
                                                    <th>Nome</th>
                                                    <th>E-mail</th>
                                                    <th>Telefone</th>
                                                    <th>CPF / CNPJ</th>
                                                    <th>Idade</th>
                                                    <th>Validade CNH</th>
                                                    <th class="text-center width10 th-none pl-0">Ações</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="width10 pl-30">
                                                        <label class="fancy-checkbox">
                                                            <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td>Igor Nicoletti</td>
                                                    <td>igornicoletti@outlook.com</td>
                                                    <td>(17) 9 99151 0013</td>
                                                    <td>421.403.248-97</td>
                                                    <td>26</td>
                                                    <td>10-01-2022</td>
                                                    <td class="text-center">                                                                                           
                                                        <a href="#visualizarMotorista" data-toggle="modal" data-target="#visualizarMotorista">                                                    
                                                            <button type="button" class="btn btn-link btn-sm" title="Visualizar"><i class="icon-eye"></i></button>                                        
                                                        </a>
                                                        <a href="#editarMotorista" data-toggle="modal" data-target="#editarMotorista">                                                    
                                                            <button type="button" class="btn btn-link btn-sm" title="Editar"><i class="icon-pencil"></i></button>
                                                        </a>
                                                        <a href="#" data-toggle="modal" data-target="#">                                                    
                                                            <button type="button" class="btn btn-link btn-sm" title="Excluir"><i class="icon-trash"></i></button>                                                            
                                                        </a>
                                                    </td>
                                                </tr>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
                                            </tbody>          
                                        </table>
                                    </div>                                                                                
                                </div>     
                                                                    
                                <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">                                       
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            
                                            <div class="card">
                                                <h6>Dados da habilitação</h6>
                                                <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="name" class="control-label">Nome completo</label>
                                                                <input type="text" id="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="rg" class="control-label">RG</label>
                                                                <input type="number" id="rg" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="cpf" class="control-label">CPF</label>
                                                                <input type="number" id="cpf" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="orgao-emissor" class="control-label">Orgão Emissor</label>
                                                                <select id="orgao-emissor" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>SSP/SP</option>
                                                                </select>                                                
                                                            </div>                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="categoria" class="control-label">Categoria</label>
                                                                <select id="categoria" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>A</option>
                                                                </select>                                                
                                                            </div>                       
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="numero-registro" class="control-label">Número do registro</label>
                                                                <input type="number" id="numero-registro" class="form-control">
                                                            </div>        
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="validade" class="control-label">Validade</label>
                                                                <input type="date" id="validade" class="form-control">
                                                            </div>        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card">
                                                <h6>Dados Pessoais</h6>
                                                <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="tipo-pessoa" class="control-label">Tipo de pessoa</label>
                                                                <select id="tipo-pessoa" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Pessoa Física</option>
                                                                    <option>Pessoa Jurídica</option>
                                                                </select>                                                
                                                            </div>             
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="cpf-cnpj" class="control-label">CPF / CNPJ</label>
                                                                <input type="number" id="cpf-cnpj" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="email" class="control-label">E-mail</label>
                                                                <input type="text" id="email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="celular" class="control-label">Celular</label>
                                                                <input type="number" id="celular" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="logradouro" class="control-label">Logradouro</label>
                                                                <input type="text" id="logradouro" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="numero" class="control-label">Número</label>
                                                                <input type="number" id="numero" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="bairro" class="control-label">Bairro</label>
                                                                <input type="text" id="bairro" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="cidade" class="control-label">Cidade</label>
                                                                <select id="cidade" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Cidade</option>
                                                                </select>                                                
                                                            </div>                                                                   
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="estado" class="control-label">Estado</label>
                                                                <select id="estado" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Estado</option>
                                                                </select>                                                
                                                            </div>                                                                  
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="naturalidade" class="control-label">Naturalidade</label>
                                                                <select id="naturalidade" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Naturalidade</option>
                                                                </select>                                                
                                                            </div>                                                                  
                                                        </div>
                                                    </div>
                                                    <div class="row justify-content-end m-t-25">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 align-self-end">
                                                            <button type="button" class="btn btn-primary width100p">Adicionar</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>     
                            </div>
                        </div>                    

                    </div>
                </div>
            </div>

        </div>
    </div>



    <!--Modal editar motorista-->
    <div class="modal fade" id="editarMotorista" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="largeModalLabel">Editar motorista</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            
                            <div class="card">
                                <h6>Dados da habilitação</h6>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="name" class="control-label">Nome completo</label>
                                                <input type="text" id="name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="rg" class="control-label">RG</label>
                                                <input type="number" id="rg" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="cpf" class="control-label">CPF</label>
                                                <input type="number" id="cpf" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="orgao-emissor" class="control-label">Orgão Emissor</label>
                                                <select id="orgao-emissor" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>SSP/SP</option>
                                                </select>                                                
                                            </div>                                                           
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="categoria" class="control-label">Categoria</label>
                                                <select id="categoria" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>A</option>
                                                </select>                                                
                                            </div>                       
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="numero-registro" class="control-label">Número do registro</label>
                                                <input type="number" id="numero-registro" class="form-control">
                                            </div>        
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="validade" class="control-label">Validade</label>
                                                <input type="date" id="validade" class="form-control">
                                            </div>        
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <h6>Dados Pessoais</h6>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="tipo-pessoa" class="control-label">Tipo de pessoa</label>
                                                <select id="tipo-pessoa" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Pessoa Física</option>
                                                    <option>Pessoa Jurídica</option>
                                                </select>                                                
                                            </div>             
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="cpf-cnpj" class="control-label">CPF / CNPJ</label>
                                                <input type="number" id="cpf-cnpj" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="email" class="control-label">E-mail</label>
                                                <input type="text" id="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="celular" class="control-label">Celular</label>
                                                <input type="number" id="celular" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="logradouro" class="control-label">Logradouro</label>
                                                <input type="text" id="logradouro" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="numero" class="control-label">Número</label>
                                                <input type="number" id="numero" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="bairro" class="control-label">Bairro</label>
                                                <input type="text" id="bairro" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="cidade" class="control-label">Cidade</label>
                                                <select id="cidade" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Cidade</option>
                                                </select>                                                
                                            </div>                                                                   
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="estado" class="control-label">Estado</label>
                                                <select id="estado" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Estado</option>
                                                </select>                                                
                                            </div>                                                                  
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="naturalidade" class="control-label">Naturalidade</label>
                                                <select id="naturalidade" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Naturalidade</option>
                                                </select>                                                
                                            </div>                                                                  
                                        </div>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Concluir</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    
    <!--Modal visualizar motorista-->
    <div class="modal fade" id="visualizarMotorista" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="largeModalLabel">Informações do motorista</h4>
                </div>
                <div class="modal-body">

                    <div class="row clearfix">                                
                        <div class="col-lg-12">
                            <h5><b>Igor Nicoletti</b></h5>
                            <p class="m-b-25">Pessoa física</p>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="mb-0"><b>Telefone:</b> (17) 9 99151 0013</p>
                            <p class="mb-0"><b>E-mail:</b> igornicoletti@outlook.com</p>
                            <br>
                            <p class="mb-0"><b>RG:</b> 48.777.626-4</p>
                            <p class="mb-0"><b>CPF:</b> 421.403.248-97</p>
                            <p class="mb-0"><b>Nascimento:</b> 10-01-1993</p>
                            <br>
                            <p class="mb-0"><b>Número do registro:</b> 12345678901</p>
                            <p class="mb-0"><b>Validade da CNH:</b> 10-01-1993</p>
                
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p class="mb-0"><b>Logradouro:</b> Endereço do motorista</p>
                            <p class="mb-0"><b>Número:</b> 12345</p>
                            <p class="mb-0"><b>Bairro:</b> Bairro do motorista</p>
                            <p class="mb-0"><b>CEP:</b> 12.345-000</p>
                            <br>
                            <p class="mb-0"><b>Cidade:</b> São José do Rio Preto</p>
                            <p class="mb-0"><b>Estado:</b> São Paulo</p>
                            <p class="mb-0"><b>Naturalidade:</b> Brasileiro</p>
                        </div>
                    </div> 
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    

<?php include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/view/include/footer.php'); ?>