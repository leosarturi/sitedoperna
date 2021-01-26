<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
require_once("connect.php");
$executa = $db->query("select * from carros");



while ($linha = $executa->fetch(PDO::FETCH_OBJ)){
   echo $linha->nome;
   echo "<br>";
    echo $linha->preco;
    echo "<br>";
    echo $linha->descricao;
    echo "<br>";
    $executa2=$db->prepare("select * from imagens_carros where idcarro=:id");
    $executa2->BindParam(':id',$linha->idcarros);
    $executa2->execute();
    while($linha2=$executa2->fetch(PDO::FETCH_OBJ)){
 

$url ="imagens/" . $linha2->nome_imagem;
//echo $url;
?>

<img src="  <?php echo $url; ?>" >
<?php
 
  
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>
</body>
</html>