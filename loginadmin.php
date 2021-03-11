<?php
require_once("connect.php");
session_start();

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    


$executa = $db->prepare("select usuario,senha from admin where usuario=:usuario" );
$executa->BindParam(':usuario', $_POST['usuario']);
 $executa->execute();
$count = $executa->RowCount();

if($count==1){
    $linha = $executa->fetch(PDO::FETCH_OBJ);
    if(($linha->usuario== $_POST['usuario']) && $linha->senha==$_POST['senha']){
    $_SESSION['logado']=1;
    echo $_SESSION['logado'];
    ?><script>window.location.href="home.php" </script><?php
    
    }else{
      ?> <?php
    }
}{
    ?>  <?php
}
}else{
   // header('Location : loginadmin.html');
}

?>