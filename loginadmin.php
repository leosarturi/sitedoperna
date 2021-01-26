<?php
require_once("connect.php");
require_once("seguranca.php")

$executa = $db->prepare("select usuario,senha from admin where usuario=:usuario" )
$executa->BindParam(':usuario', $_POST['usuario']);
$resultado = $executa->execute();

if($resultado->RowCount()==1){
    $linha = $executa->fetch(PDO::FETCH_OBJ);
    if(($linha->usuario== $_POST['usuario']) && $linha->senha==$_POST['senha']);
    $_SESSION['logado']=1;
    //home
}

?>