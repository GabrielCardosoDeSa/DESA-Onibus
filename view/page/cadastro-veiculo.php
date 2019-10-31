<?php

namespace onibus\view;

include_once('../../config.php');

include_once($_SERVER['DOCUMENT_ROOT'].'/'.$config['nameProject'].'/controller/CadastroVeiculoController.php');



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
                            <li class="breadcrumb-item active">Veículos</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card open_task">

                        <div class="header">
                            <h2>Cadastro de veículos</h2>
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
                                                    <th>Placa</th>
                                                    <th>Marca</th>
                                                    <th>Modelo</th>
                                                    <th>Fabricação</th>
                                                    <th>Licenciamento</th>
                                                    <th>Situação</th>
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
                                                    <td>GUT-1749</td>
                                                    <td>Mercedes Bens</td>
                                                    <td>Paradiso GV 1450</td>
                                                    <td>2007</td>
                                                    <td>10-01-2022</td>
                                                    <td>Ativo</td>
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
                                                <h6>Dados do veículo</h6>
                                                <div class="body">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="placa" class="control-label">Placa</label>
                                                                <input type="text" id="placa" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="cidade" class="control-label">Cidade</label>
                                                                <input type="text" id="cidade" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="marca" class="control-label">Marca</label>
                                                                <input type="text" id="marca" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="modelo" class="control-label">Modelo</label>
                                                                <input type="text" id="modelo" class="form-control">
                                                            </div>
                                                        </div>                                                                                                            
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="renavam" class="control-label">Número do renavam</label>
                                                                <input type="number" id="renavam" class="form-control">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="chassi" class="control-label">Número do chassi</label>
                                                                <input type="number" id="chassi" class="form-control">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="motor" class="control-label">Número do motor</label>
                                                                <input type="number" id="motor" class="form-control">
                                                            </div>
                                                        </div> 
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">
                                                                <label for="licenciamento" class="control-label">Data do licenciamento</label>
                                                                <input type="date" id="licenciamento" class="form-control">
                                                            </div>
                                                        </div>                                              
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="ano-fabricacao" class="control-label">Ano de fabricação</label>
                                                                <select id="ano-fabricacao" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>2019</option>
                                                                </select>                                                
                                                            </div>                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="combustivel" class="control-label">Combustível</label>
                                                                <select id="combustivel" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Gasolina</option>
                                                                </select>                                                
                                                            </div>                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="cor" class="control-label">Cor</label>
                                                                <select id="cor" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Branco</option>
                                                                </select>                                                
                                                            </div>                                                           
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                                            <div class="form-group">                                                                
                                                                <label for="situacao" class="control-label">Situação</label>
                                                                <select id="situacao" class="form-control" data-placeholder="Select">
                                                                    <option></option>
                                                                    <option>Ativo</option>
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
                    <h4 class="title" id="largeModalLabel">Editar veículo</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            
                            <div class="card">
                                <h6>Dados do veículo</h6>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="placa" class="control-label">Placa</label>
                                                <input type="text" id="placa" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="cidade" class="control-label">Cidade</label>
                                                <input type="text" id="cidade" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="marca" class="control-label">Marca</label>
                                                <input type="text" id="marca" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="modelo" class="control-label">Modelo</label>
                                                <input type="text" id="modelo" class="form-control">
                                            </div>
                                        </div>                                                                                                            
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="renavam" class="control-label">Número do renavam</label>
                                                <input type="number" id="renavam" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="chassi" class="control-label">Número do chassi</label>
                                                <input type="number" id="chassi" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="motor" class="control-label">Número do motor</label>
                                                <input type="number" id="motor" class="form-control">
                                            </div>
                                        </div> 
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">
                                                <label for="licenciamento" class="control-label">Data do licenciamento</label>
                                                <input type="date" id="licenciamento" class="form-control">
                                            </div>
                                        </div>                                              
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="ano-fabricacao" class="control-label">Ano de fabricação</label>
                                                <select id="ano-fabricacao" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>2019</option>
                                                </select>                                                
                                            </div>                                                           
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="combustivel" class="control-label">Combustível</label>
                                                <select id="combustivel" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Gasolina</option>
                                                </select>                                                
                                            </div>                                                           
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="cor" class="control-label">Cor</label>
                                                <select id="cor" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Branco</option>
                                                </select>                                                
                                            </div>                                                           
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12">
                                            <div class="form-group">                                                                
                                                <label for="situacao" class="control-label">Situação</label>
                                                <select id="situacao" class="form-control" data-placeholder="Select">
                                                    <option></option>
                                                    <option>Ativo</option>
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
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Concluir</button>
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