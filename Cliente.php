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
   
</head>

<body style="overflow-y:auto;background:gray;overflow-x:hidden">
    <div class="row" style='margin-top:3%'>   
        
        <div class="container m-auto" style='background-color:white'>
        <div align='center'><b>UNITE</b></div>

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
</body>
</html>