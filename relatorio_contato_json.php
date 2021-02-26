<?php
include('connect.php');
require_once("seguranca.php");
$id = $_GET['id'];


 $executa = $db->prepare("SELECT * FROM contato where idcontato =:id ");
  $executa->BindParam(':id',$id);
 	       
        $executa->execute();

 if ($executa->rowCount()!=0){
	$linha=$executa->fetch(PDO::FETCH_OBJ);
	 
 	

	$ret['firstName'] = $linha->nome;
	$ret['resultado'] = 'Mensagem: ' . $linha->mensagem;
	

}else{
	$ret['firstName'] = '';
	$ret['resultado'] = 'Nenhuma mensagem disponivel';

}
$myJson = json_encode($ret);


echo $myJson;