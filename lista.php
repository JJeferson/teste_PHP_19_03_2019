<?php

     
     
     require_once('db.class.php');
     $objDb = new db();
     $link = $objDb->conecta_mysql();


 
           
?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Pagina de CRUD</title>
                                        


    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="icon" href="imagens/Ico.png">
    <script>
      // código javascript            
    </script>
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
      
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Voltar para Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
  

         

          <?php

                       
                              $sql = " SELECT * from usuarios ";

                             $resultado_id = mysqli_query($link, $sql);
 
                             while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
                              ?>
                              <form  method="post"  id="EditaUsuario" name="EditaUsuario" align="center"  action="update.php">

                               <?php
                    echo '<a href="#" class="list-group-item">';
                    echo '<h4 class="list-group-item-heading">'.$registro['nome'].'</h4>';
                    echo '</br>';
                    
                    echo '<p class="list-group-item-text"> email:  '.$registro['email'].' |   Fone:  '.$registro['fone'];
                                ?>

                        <input type="hidden" class="form-control" id="email_Usuario" name="email_Usuario" value="<?php echo $registro['email'];?>
                          ">

                         </br></br>
                         <button type="submit" class="btn btn-default" id="Edita"   >Editar Usuario </button>
                         </form>

                       <!-- ------------------------------------- -->
                     

                <form  method="post"  id="ExcluiUsuario" name="ExcluiUsuario" align="center"  action="pergunta.php">

                <input type="hidden" class="form-control" id="email_Usuario" name="email_Usuario" value="<?php echo $registro['email'];?>
                          ">

                          
                        

                         </br></br>
                         <button type="submit" class="btn btn-default" id="Exclui"   >Exclui Usuario </button>
                         </form>  

                        <?php
                           }// fim do laço de repetição
                          ?>
      

      
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>






