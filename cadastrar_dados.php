<?php
require_once("connect.php");
require_once("seguranca.php");
$id = new DateTime();
$id= $id->getTimestamp();
$nome_carro = $_POST['nome'];
$desc_carro = $_POST['desc'];
$preco_carro = $_POST['preco'];

$target_dir = "E:/xampp/htdocs/sitedoperna/imagens";

 
 $executa = $db->prepare("insert  into carros (idcarros,nome,descricao,preco) values(:id,:nome,:desc,:preco)");
 $executa->BindParam(':id',$id);
 $executa->BindParam(':nome',$_POST['nome']);
 $executa->BindParam(':desc',$_POST['desc']);
 $executa->BindParam(':preco',$_POST['preco']);
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