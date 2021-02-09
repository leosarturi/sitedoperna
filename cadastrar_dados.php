<?php
require_once("connect.php");
require_once("seguranca.php");
$id = new DateTime();
$id= $id->getTimestamp();
$nome_carro = $_POST['nome'];
$desc_carro = $_POST['desc'];
$preco_carro = $_POST['preco'];

$target_dir = "imagens";

 
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

foreach ( $_FILES as $chave => $valor ) { 
    $$chave = $valor;
    
    $a= $valor['tmp_name'];
if(move_uploaded_file($a,$target_dir ."/". $valor['name'])){
  $executa2 = $db->prepare("insert into imagens_carros (idcarro,nome_imagem) values(:id,:nome)");
  $executa2->BindParam(':id',$id);
  $executa2->BindParam(':nome',$valor['name']);
  $executa2->execute();
}else{
    echo "1";
}
}

?>