<?php
include('connect.php');
include('seguranca.php');

$id = $_GET['idcontato'];

	
 $executa = $db->prepare("DELETE FROM contato where idcontato =:id ");
  $executa->BindParam(':id',$id);
 	       
        $executa->execute();

?>