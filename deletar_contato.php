<?php
include('connect.php');
include('seguranca.php');

$id = $_GET['idcontato'];

	
 $executa = $db->prepare("DELETE FROM contato where idcontato =:id ");
  $executa->BindParam(':id',$id);
 	       
        $executa->execute();


        if ($executa->rowCount()!=0){
            $linha=$executa->fetch(PDO::FETCH_OBJ);
             
             
      
            $ret['status'] = "1";
            $ret['mensagem'] = 'Mensagem: ' . "Mensagem deletada com sucesso";
            
      
      }else{
            $ret['status'] = '0';
            $ret['mensagem'] = 'Mensagem: ' . "Erro ao deletar mensagem ";
      
      }
      
      echo json_encode($ret);
      exit;
      


?>