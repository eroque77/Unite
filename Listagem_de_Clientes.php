<!DOCTYPE html>
<html lang="pt-br">

<?php

    $url = 'localhost/Unite/api/clientes';
    $ch = curl_init ($url);
    curl_setopt ($ch, CURLOPT_HTTPGET, true);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
    $response_json = curl_exec ($ch);

    //echo $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE); //Exibe o status...se está Ok [200]

    curl_close ($ch);
    $response = json_decode ($response_json, true);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="">

    <title>Unite</title>          
    
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>   
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script type="text/javascript" src="jq/mensagem1.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


   
</head>

<body style="overflow-y:auto;background:gray;overflow-x:hidden">
    <div class="row" style='margin-top:3%'>   
        
        <div class="container-fluid m-auto" style='background-color:white'>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle ml-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Clientes
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" onclick="window.location='Cadastro_de_Clientes.php'">Cadastro de Clientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="window.location='Listagem_de_Clientes.php'">Listagem de Clientes</a>
                </div>
            </div>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Veículos
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#" onclick="window.location='Cadastro_de_Veiculos.php'">Cadastro de Veículos</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="window.location='Listagem_de_Veiculos.php'">Listagem de Veículos</a>                
                </div>
            </div>

        </div>
    </div>

    <!--CORPO-->
    <br>
   
    <div class="container-fluid m-auto" style='background-color:white;'>
        <div align='center'><b>UNITE</b></div>

        <div class="col-md-12 bg-danger m-auto" style='color:white;text-align:center'><h5>Listagem de Clientes</h53></div>

        <div class="" style='vertical-align:middle !important;'>

            <table id="example" class="table table-condensed table-bordered table-striped table-hover dataTable no-footer" arial-describedby="tablist_info" role="grid" cellspacing="0" style="color:black;width:100%">
                
                <thead>
                    <tr role="row" class="odd" style="color:black">
                    <b>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:2%;">Id</th>                         
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:15%">Nome</th>   
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:6%">Cpf</th>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:16%">Endereço</th>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:13%">Bairro</th>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:10%">Cidade</th>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:2%">UF</th>
                        <th class="bg-danger text-white" style="font-size: 13px;font-family: verdana;width:9%;text-align:center">Ações</th> 
                    </b>                      
                    </tr>
                </thead>                            
                
                <tbody>
                    <?php

                      foreach($response['retorno'] as $value){ ?>
                        <tr>       
                            <td style="width:2%;font-size:13px">
                                <?php echo $value['id']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['nome']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['cpf']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['endereco']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['bairro']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['cidade']; ?>
                            </td>
                            <td style="font-size:13px">
                                <?php echo $value['uf']; ?>
                            </td>

                            <td class="text-center" style="font-size:13px">                               
                               
                                <button type="button" class="btn btn-info btn-sm" name="alterar_cliente" onclick="buscar_cliente(<?php echo $value['id'];  ?>)">Alterar</button>      
                                <!--<button type="button" class="btn btn-danger btn-sm" name="excluir_cliente" onclick="deletar_cliente(<?php //echo $value['id']; ?>)">Excluir</button> -->  
                                <button type="button" class="btn btn-danger btn-sm" name="excluir_cliente" onclick="modalexc(<?php echo $value['id']; ?>)">Excluir</button>                   
                            </td>
                           
                        </tr>  

                      <?php } ?>     
                </tbody>                      

            </table>                
            <br>

        </div> 
    </div>

</body>
</html>

<div class="modal fade" id="ExemploModalCentralizado1" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Alterar Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Nome
        <input id="nome" type="text" class="form-control"  row="2" name="quest" maxlength="60" required>
        Cpf
        <input id="cpf" type="text" class="form-control"  row="2" name="quest" maxlength="18" required>
        Endereço
        <input id="endereco" type="text" class="form-control"  row="2" name="quest" maxlength="60" required>
        Bairro
        <input id="bairro" type="text" class="form-control"  row="2" name="quest" maxlength="40" required>
        Cidade
        <input id="cidade" type="text" class="form-control"  row="2" name="quest" maxlength="40" required>
        Uf
        <input id="uf" type="text" class="form-control"  row="2" name="quest" maxlength="2" style='width:50px' required>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger" onclick="alterar_cliente('<?php echo $value['id']; ?>')">Alterar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ExemploModalCentralizado2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" >
    <div class="modal-content" >
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Excluir Cliente?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        Você deseja excluir mesmo excluir esse cliente?
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-danger" onclick="deletar_cliente(meuid)">Excluir</button>
      </div>
    </div>
  </div>
</div>


<script>
    function buscar_cliente(id){
        id1=id;
        $.ajax({
            type: 'POST',
            url: "client/buscar_clientes.php",
            Async: true,
            data: { 
                    id: id1,                                                                         
                },
            dataType: 'json',
            success: function(data) {
                for (i = 0; i < data.retorno.length; i++) {                 
                  $('#nome').val(data.retorno[i].nome);      
                  $('#cpf').val(data.retorno[i].cpf);
                  $('#endereco').val(data.retorno[i].endereco);
                  $('#bairro').val(data.retorno[i].bairro);
                  $('#cidade').val(data.retorno[i].cidade);
                  $('#uf').val(data.retorno[i].uf);       
                } 
                $('#ExemploModalCentralizado1').modal('show');    
            }                      
        });         
    }

    function alterar_cliente(id){
        var inicio=0;
        $("input").filter(function() {
            if(this.value=='' && inicio==0){
                document.getElementById(this.id).focus();
                inicio=1;
                return false;
            }                                                                       
        }).get(); 

        //Alteração:
        nome=$('#nome').val();
        cpf=$('#cpf').val();
        endereco=$('#endereco').val();
        bairro=$('#bairro').val();
        cidade=$('#cidade').val();
        uf=$('#uf').val();

        $.ajax({
            type: 'POST',
            url: "client/Alterar_Clientes.php",
            Async: true,
            data: { 
                    nome: nome,
                    cpf: cpf,
                    endereco: endereco,
                    bairro: bairro,
                    cidade: cidade,
                    uf: uf,  
                    id:id,                                                              
                },
            dataType: 'json',
            success: function(data) {
                if(data==1){
                    mensagem1('<i class="fa fa-check" style="color:green"></i>&nbspCliente alterado com sucesso!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        location.reload();   
                    }, 3000); 
                                               
                }else{
                    mensagem1('<i class="fa fa-exclamation" style="color:red"></i>&nbspErro ao alterar o cliente!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        document.getElementById(nome).focus();   
                    }, 3000); 
                }
            }                      
        }); 
        
    }

    function deletar_cliente(id){
        id1=id;
        $.ajax({
            type: 'POST',
            url: "client/Deletar_Clientes.php",
            Async: true,
            data: { 
                    id:id1,                                                              
                },
            dataType: 'json',
            success: function(data) {
                if(data==1){
                    mensagem1('<i class="fa fa-check" style="color:green"></i>&nbspCliente excluído com sucesso!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        location.reload();   
                    }, 3000); 
                                               
                }else{
                    mensagem1('<i class="fa fa-exclamation" style="color:red"></i>&nbspErro ao excluir o cliente!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        location.reload();   
                    }, 3000); 
                }
            }                      
        });
    }
</script> 

<!--DATATABLE -->
<script type="text/javascript" src="dt/jquery.dataTables.min.js"></script>
<script>
    var table = $('#example').DataTable({

        language: {                    
            
            search: "Pesquisar: ",
            info: "Mostrando (_START_ de _END_), de um total de _TOTAL_, registros",
            ZeroRecords:    "Não foi encontrado registros",
            EmptyTable:     "Nenhum dado disponível nessa tabela",
            previous: "Anterior",
            next:     "Próximo",  
            sLengthMenu: "Mostrar _MENU_ registros",       
            paginate: {
                "previous": "Anterior&nbsp;&nbsp;",
                "next": "&nbsp;&nbsp;Próximo"
            }            
        }
    }); 
  
</script>

<script>
  meuid=0;
  function modalexc(id){  
      meuid=id;    
        $('#ExemploModalCentralizado2').modal('show');
    }
</script>

<style>
    #example_filter{
        float:right;
    }
</style>