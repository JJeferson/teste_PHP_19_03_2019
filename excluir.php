<?php

 
require_once('db.class.php');

$Recebe_id  = $_POST['id'];
//echo $Recebe_id ;

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql="delete  from usuarios where id='$Recebe_id'";



mysqli_query($link,$sql);
 
     header('Location: lista.php');
           


?>