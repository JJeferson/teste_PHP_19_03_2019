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
               $Exibe_Email = $Dados['email'];
               $Exibe_Nome  = $Dados['nome']; 
               $Exibe_Fone  = $Dados['fone'];
           


?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Pagina de CRUD</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <script>
        function somenteNumeros(num) {
        var er = /[^0-9.]/;
        er.lastIndex = 0;
        var campo = num;
        if (er.test(campo.value)) {
          campo.value = "";
        }
       }
      </script>


		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/Ico.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="lista.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h4 align="center" >Pagina de CRUD para teste  Menvie </h4>
	    		<br />
	    		 

                       <div class="jumbotron">
				     <form method="post" action="gravando_o_update.php" id="formCadastrarse">
					 
					 <input type="text" class="form-control" id="nome" value="<?php echo $Exibe_Nome;?>" name="nome" placeholder="nome" required="requiored">
				 


                   <input type="email" class="form-control" id="email" value="<?php echo $Exibe_Email;?>" name="email" placeholder="email" required="requiored">
		 

		            <input type="text" class="form-control" maxlength="20" onkeyup="somenteNumeros(this);" id="fone" 
                             value="<?php echo $Exibe_Fone;?>"name="fone" placeholder="fone" required="requiored">
                    

                    <input type="hidden" class="form-control" id="id" name="id" value="<?php echo  $Recebe_ID ;?>">

 
					<button type="submit"   class="btn btn-primary">Gravar</button>
				</form>
			 </div>
			</div>
			

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>