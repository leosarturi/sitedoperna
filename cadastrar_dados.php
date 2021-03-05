<?php
require_once("connect.php");
require_once("seguranca.php");
include("WideImage/WideImage.php");
$target_dir = "imagens/";
if(isset($_POST['id'])){
  try{
$executa = $db->prepare("update carros set nome=:nome,descricao=:desc,preco=:preco,marca=:marca,modelo=:modelo,ano=:ano,cambio=:cambio,portas=:portas,combustivel=:combustivel,quilometragem=:quilometragem where idcarros=:id");
$executa->BindParam(':id',$_POST['id']);
$executa->BindParam(':nome',$_POST['nome']);
$executa->BindParam(':desc',$_POST['desc']);
$executa->BindParam(':preco',$_POST['preco']);
$executa->BindParam(':marca',$_POST['marca']);
$executa->BindParam(':modelo',$_POST['modelo']);
$executa->BindParam(':ano',$_POST['ano']);
$executa->BindParam(':cambio',$_POST['cambio']);
$executa->BindParam(':portas',$_POST['portas']);
$executa->BindParam(':combustivel',$_POST['combustivel']);
$executa->BindParam(':quilometragem',$_POST['quilometragem']);
$executa->execute();
if($executa){
  $ret['status']=1;
  $ret['mensagem']="sucesso";
}else{
  $ret['status']=0;
    $ret['mensagem']="erro";

}
$query = $_POST['query'];
$query = explode("," ,$query);
foreach( $query as $var){
  $executa2 = $db->prepare("delete from imagens_carros where nome_imagem=:nome and idcarro=:id");
  $executa2->BindParam(':id',$_POST['id']);
$executa2->BindParam(':nome',$var);
$executa2->execute();


}
foreach ( $_FILES as $chave => $valor ) { 
  $$chave = $valor;
$diro = $valor['tmp_name'];
  //$a=$valor['tmp_name'];
  $a = resize2($valor,$target_dir);
  
  
  
if($a!=null){

$executa3 = $db->prepare("insert into imagens_carros (idcarro,nome_imagem) values(:id,:nome)");
$executa3->BindParam(':id',$_POST['id']);
$executa3->BindParam(':nome',$valor['name']);

$executa3->execute();
 
    
}else{
  
   
}
}
echo json_encode($ret);
exit;
}catch(Excepition $e){
  $ret['status']=0;
  $ret['mensagem']=$e;
  
}

}else{
$id = new DateTime();
$id= $id->getTimestamp();
$nome_carro = $_POST['nome'];
$desc_carro = $_POST['desc'];
$preco_carro = $_POST['preco'];

try{


 $executa = $db->prepare("insert  into carros (idcarros,nome,descricao,preco,marca,modelo,ano,cambio,portas,combustivel,quilometragem) values(:id,:nome,:desc,:preco,:marca,:modelo,:ano,:cambio,:portas,:combustivel,:quilometragem)");
 $executa->BindParam(':id',$id);
 $executa->BindParam(':nome',$_POST['nome']);
 $executa->BindParam(':desc',$_POST['desc']);
 $executa->BindParam(':preco',$_POST['preco']);
 $executa->BindParam(':marca',$_POST['marca']);
 $executa->BindParam(':modelo',$_POST['modelo']);
 $executa->BindParam(':ano',$_POST['ano']);
 $executa->BindParam(':cambio',$_POST['cambio']);
 $executa->BindParam(':portas',$_POST['portas']);
 $executa->BindParam(':combustivel',$_POST['combustivel']);
 $executa->BindParam(':quilometragem',$_POST['quilometragem']);
 
 $executa->execute();
 if($executa){
  $ret['status']=1;
  $ret['mensagem']="sucesso";
  
 }else{
  $ret['status']=0;
  $ret['mensagem']="erro";
 }
foreach ( $_FILES as $chave => $valor ) { 
    $$chave = $valor;
$diro = $valor['tmp_name'];
    //$a=$valor['tmp_name'];
    $a = resize2($valor,$target_dir);
    
    
    
if($a!=null){
  
  $executa2 = $db->prepare("insert into imagens_carros (idcarro,nome_imagem) values(:id,:nome)");
  $executa2->BindParam(':id',$id);
  $executa2->BindParam(':nome',$valor['name']);
  
  $executa2->execute();
 
  
}else{
  
  
}
}
echo json_encode($ret);
  exit;
}
catch(Exception $e){
  $ret['status']=0;
    $ret['mensagem']=$e;
    
}
}
function resize2($originalImage,$dir){
  

  list($width, $height) = getimagesize($originalImage['tmp_name']);
  $newName=basename($originalImage['name']);
  $imageResized = imagecreatetruecolor(450, 300);
  switch($originalImage['type']){
    case "image/jpeg": 
      $imageTmp     = imagecreatefromjpeg ($originalImage['tmp_name']);    
      imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, 450, 300, $width, $height);
      imagejpeg($imageResized, $dir . "/" . $newName,100);
      return $imageResized;

    case "image/png":
      $imageTmp     = imagecreatefrompng ($originalImage['tmp_name']);    
      imagecopyresampled($imageResized, $imageTmp, 0, 0, 0, 0, 450, 300, $width, $height);
      imagejpeg($imageResized, $dir . "/" . $newName,100);
      return $imageResized;

    default:
      echo "tipo errado";
      return;
    }
  
  
}

function resize($originalImage,$dir){
  move_uploaded_file($originalImage,$dir);
  try{
  $image = WideImage::load($dir);
  $return =$image->resize(400,300);
  $return->saveToFile($dir.$originalImage['name']);
  return $return;
  }catch(Exception $e){
    echo $e;
  }

  
 
}

?>