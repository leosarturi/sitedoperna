<?php
include('connect.php');
include('seguranca.php');

$id = $_GET['idcarros'];

	
 $executa = $db->prepare("DELETE FROM carros where idcarros =:id ");
  $executa->BindParam(':id',$id);
 	       
        $executa->execute();

        if ($executa->rowCount()!=0){
            $linha=$executa->fetch(PDO::FETCH_OBJ);
             
             
      
            $ret['status'] = "sucesso";
            $ret['mensagem'] = 'Mensagem: ' . "carro deletado com sucesso";
            
      
      }else{
            $ret['status'] = 'erro';
            $ret['mensagem'] = 'Mensagem: ' . "Erro ao deletar carro ";
      
      }
      
      echo json_encode($ret);
      exit;
      

?>