<?php
require_once("connect.php");
require_once("seguranca.php");

$executa = $db->prepare("select usuario,senha from admin where usuario=:usuario" );
$executa->BindParam(':usuario', $_POST['usuario']);
 $executa->execute();
$count = $executa->RowCount();

if($count==1){
    $linha = $executa->fetch(PDO::FETCH_OBJ);
    if(($linha->usuario== $_POST['usuario']) && $linha->senha==$_POST['senha']){
    $_SESSION['logado']=1;
    
    header('Location: home.php');
    }else{
      ?> <script> window.location="loginadmin.html" </script> <?php
    }
}{
    ?> <script> window.location="loginadmin.html" </script> <?php
}

?>