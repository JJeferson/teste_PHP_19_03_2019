<?php
   

$Recebe_email = $_POST['email_Usuario'];

 require_once('db.class.php');


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql="select * from usuarios where email='$Recebe_email'";



$Resultado = mysqli_query($link,$sql);
/**  convertendo */
$Dados = mysqli_fetch_array($Resultado);

               $Recebe_ID = $Dados['id'];
      
 
     
?> 

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Pagina de CRUD</title>
       	<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

	 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link rel="icon" href="imagens/Ico.png">
		<script>
	 	</script>
	</head>

	<body>
    <div class="container">

	    	

	      <div class="jumbotron">
	        <h1>Tem certeza de que quer excluir?</h1>
	                   <form method="post" action="excluir.php" id="excluir">

                       
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $Recebe_ID;?>">
                       

                         <button type="submit" class="btn btn-primary">Sim, quero excluir !</button></br>
                     <!--   <a href="excluir.php" class="btn btn-primary">Sim, quero excluir !</a>   -->
                        <a href="lista.php" class="btn btn-primary">Não, Voltar a Lista.</a>   
                       </form>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>