<?php

    //Connectando a um database
    $connection=mysqli_connect('localhost','root','','rest_api_unite');

    //if($connection){echo 'Ok';}

    $request_method=$_SERVER["REQUEST_METHOD"]; //Obtem o método de solicitação HTTP usado pela chamada da API
  
	switch($request_method)
	{
        case 'GET':            
			// Recuperando Produtos
			if(!empty($_GET["id"]))
			{
				$product_id=intval($_GET["id"]);
				get_products($product_id); //Se for passado um ID, recupera oi produto específico
			}
			else
			{
				get_products(); //Recupera todos
			}
			break;
		case 'POST':
			// Insere Produto
			insert_product();
			break;
		case 'PUT':
			// Atualiza Produto
			$product_id=intval($_GET["id"]);
			update_product($product_id);
			break;
		case 'DELETE':
			// Delete Produto
			$product_id=intval($_GET["id"]);
			delete_product($product_id);
			break;
		default:
			// Invalid Request Method
			header("HTTP/1.0 405 Método não permitido");
			break;
    }


    function get_products($product_id=0)
	{
		global $connection;
		$query="SELECT * FROM clientes";
		if($product_id != 0)
		{
			$query.=" WHERE id=".$product_id." LIMIT 1";
		}
		$response=array();
		$result=mysqli_query($connection, $query);
		while($row=mysqli_fetch_array($result))
		{
			$response[]=$row;
        }
        
        header('Content-Type: application/json');
        echo json_encode(array('status'=>'ok', 'retorno'=>$response));
    }
    
    function insert_product()
	{
		global $connection;
		$nome=$_POST["nome"];
		$cpf=$_POST["cpf"];
		$endereco=$_POST["endereco"];
		$bairro=$_POST["bairro"];
		$cidade=$_POST["cidade"];
		$uf=$_POST["uf"];

		$query="INSERT INTO clientes SET nome='{$nome}', cpf='{$cpf}',endereco='{$endereco}', bairro='{$bairro}', cidade='{$cidade}', uf='{$uf}' ";
		if(mysqli_query($connection, $query))
		{
			$status=1;
		}
		else
		{
			$status=0;
		}
		header('Content-Type: application/json');
        echo json_encode($status);
    }
    
    function update_product($id)
	{
		global $connection;
		parse_str(file_get_contents("php://input"),$post_vars); //Isso carrega promelivata $ post_vars conectando a linha de variáveis ​​exatamente como você espera ver na solicitação GET.
		$nome=$post_vars["nome"];
		$cpf=$post_vars["cpf"];
		$endereco=$post_vars["endereco"];
		$bairro=$post_vars["bairro"];
		$cidade=$post_vars["cidade"];
		$uf=$post_vars["uf"];
		
		$query="UPDATE clientes SET nome='{$nome}', cpf='{$cpf}' , cpf='{$cpf}', endereco='{$endereco}', bairro='{$bairro}', cidade='{$cidade}', uf='{$uf}' WHERE id=".$id;
		if(mysqli_query($connection, $query))
		{			
				$status=1;			
		}
		else
		{			
				$status=0;			
		}
		header('Content-Type: application/json');
        echo json_encode($status);
    }
    
    function delete_product($product_id)
	{
		global $connection;
		$query="DELETE FROM products WHERE product_id=".$product_id;
		if(mysqli_query($connection, $query))
		{
			$status=1;
		}
		else
		{
			$status=0;
		}
		header('Content-Type: application/json');
		echo json_encode(array('status'=>$status));
    }      

    
?>