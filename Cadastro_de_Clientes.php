<!DOCTYPE html>
<html lang="pt-br">

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
        
        <div class="container m-auto" style='background-color:white'>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Cadastros
                </button>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="#" onclick="window.location='Cadastro_de_Clientes.php'">Cadastro de Clientes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" onclick="window.location='Listagem_de_Clientes.php'">Listagem de Clientes</a>
            </div>
            </div>

        </div>
    </div>

    <!--CORPO-->
    <br>
   
    <div class="container m-auto" style='background-color:white;'>
        <div align='center'><b>UNITE</b></div>

        <div class="col-md-12 bg-danger m-auto" style='color:white;text-align:center'><h5>Cadastro de Clientes</h53></div>

        <div class="row" style='vertical-align:middle !important;'>
            
            <label class="col-md-4 col-xs-4 mt-4" style='text-align:right;'>Nome</label>
            <div class="col-md-6 col-xs-4" >
                <input id="nome" type="text" class="form-control mt-4 est" name="nome" maxlength="100" value="" required> 
            </div>
            <label class="col-md-4 col-xs-4 mt-2" style='text-align:right;'>Cpf</label>
            <div class="col-md-6 col-xs-4" >
                <input id="cpf" type="text" class="form-control mt-2 est" name="cpf" maxlength="16" value="" style='width:200px' required> 
            </div>
            <label class="col-md-4 col-xs-4 mt-2" style='text-align:right;'>Endereço</label>
            <div class="col-md-6 col-xs-4" >
                <input id="endereco" type="text" class="form-control mt-2 est" name="endereco" maxlength="100" value="" required> 
            </div>

            <label class="col-md-4 col-xs-4 mt-2" style='text-align:right;'>Bairro</label>
            <div class="col-md-6 col-xs-4" >
                <input id="bairro" type="text" class="form-control mt-2 est" name="bairro" maxlength="80" value="" style='width:250px' required> 
            </div>
            <label class="col-md-4 col-xs-4 mt-2" style='text-align:right;'>Cidade</label>
            <div class="col-md-4 col-xs-4" >
                <input id="cidade" type="text" class="form-control mt-2 est" name="cidade" maxlength="80" value="" style='width:300px' required> 
            </div>
            <label class="col-md-1 col-xs-4 mt-2" style='text-align:right;'>Uf</label>
            <div class="col-md-1 col-xs-4" >
                <input id="uf" type="text" class="form-control mt-2 est" name="uf" maxlength="2" value="" style='width:50px' required> 
            </div>

         
            <div class="col-md-12 col-xs-12 mt-4 mb-2" align='center'>
                <button type="submit" class="btn btn-success" name="gravar" value="gravar" onclick="cadastrar_cliente()">
                    Gravar
                </button>
                <button type="button" class="btn btn-dark" onclick="window.location='Cliente.php'">
                    &nbsp;Voltar&nbsp;
                </button>
            </div>           

        </div> 
    </div>

</body>
</html>


<script>
    function cadastrar_cliente(){
        var inicio=0;
        $("input").filter(function() {
            if(this.value=='' && inicio==0){
                document.getElementById(this.id).focus();
                inicio=1;
                return false;
            }                                                                       
        }).get(); 

        //Inserção:
        nome=$('#nome').val();
        cpf=$('#cpf').val();
        endereco=$('#endereco').val();
        bairro=$('#bairro').val();
        cidade=$('#cidade').val();
        uf=$('#uf').val();

        $.ajax({
            type: 'POST',
            url: "client/inserir_clientes.php",
            Async: true,
            data: { 
                    nome: nome,
                    cpf: cpf,
                    endereco: endereco,
                    bairro: bairro,
                    cidade: cidade,
                    uf: uf,                                                                
                },
            dataType: 'json',
            success: function(data) {
                if(data==1){
                    mensagem1('<i class="fa fa-check" style="color:green"></i>&nbspCliente cadastrado com sucesso!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        location.reload();   
                    }, 3000); 
                                               
                }else{
                    mensagem1('<i class="fa fa-exclamation" style="color:red"></i>&nbspErro ao cadastrar o cliente!',3000,'#FFFAFA','gray');
                    setTimeout(function(){    
                        document.getElementById(nome).focus();   
                    }, 3000); 
                }
            }                      
        }); 
        
    }
</script>