<?php
include('connect.php');
include('seguranca.php');

$id = $_GET['idcarros'];

	
 $executa = $db->prepare("DELETE FROM carros where idcarros =:id ");
  $executa->BindParam(':id',$id);
 	       
        $executa->execute();

?>