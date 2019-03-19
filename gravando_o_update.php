<?php


require_once('db.class.php');

$Recebe_id  = $_POST['id'];
$Recebe_nome  = $_POST['nome'];
$Recebe_email = $_POST['email'];
$Recebe_fone  = $_POST['fone'];

$objDb = new db();
$link = $objDb->conecta_mysql();
 

$sql="update usuarios set nome='$Recebe_nome', email='$Recebe_email' ,fone='$Recebe_fone' where id='$Recebe_id'";





if(mysqli_query($link,$sql)){
   echo 'Cadastro alterado com sucesso';
  
   echo '</br>';
   echo' <a href="lista.php" class="btn btn-primary">Voltar ao Lista</a>';
}else{
   echo 'Erro ao alterar.';
   echo '</br>';
   echo' <a href="lista.php" class="btn btn-primary">Voltar ao Lista</a>';
  
};


?>