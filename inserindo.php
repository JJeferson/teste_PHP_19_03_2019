<?php


require_once('db.class.php');

$Recebe_nome  = $_POST['nome'];
$Recebe_email = $_POST['email'];
$Recebe_fone  = $_POST['fone'];

$objDb = new db();
$link = $objDb->conecta_mysql();


$sql="Insert into usuarios(nome,email,fone) values('$Recebe_nome','$Recebe_email','$Recebe_fone')";




if(mysqli_query($link,$sql)){
   echo 'Cadastro efetuado com sucesso';
  
   echo '</br>';
   echo' <a href="index.php" class="btn btn-primary">Voltar ao Home</a>';
}else{
   echo 'Erro ao cadastrar novo.';
   echo '</br>';
   echo' <a href="index.php" class="btn btn-primary">Voltar ao Home</a>';
  
};


?>