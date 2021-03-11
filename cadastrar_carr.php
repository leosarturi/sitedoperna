<?php

require_once("connect.php");
require_once("seguranca.php");
include("home.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de carros</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.growl.js"></script>
    <script src="js/jquery.form.js"></script>

</head>
<body>
<link rel="stylesheet" href="css/jquery.growl.css">
<?php
if(isset($_GET['idcarros'] )){
   
    $executa=$db->prepare("select * from carros where idcarros=:id");
    $executa->BindParam(':id',$_GET['idcarros']);
    $executa->execute();
    if ($executa->rowCount()!=0){
        $linha=$executa->fetch(PDO::FETCH_OBJ);
    }
         
    $executa2=$db->prepare("select nome_imagem from imagens_carros where idcarro=:id");
    $executa2->BindParam(':id',$_GET['idcarros']);
    $executa2->execute();
   

         
    ?>
   <div class="aaa">
<div class="bbb">
 <form action="cadastrar_dados.php" id="jsonForm" method="POST" enctype="multipart/form-data" >

        Nome do carro<input type="text" name="nome"  value="<?php echo $linha->nome ?>"><br>
        Descriçao do carro<input type="text"  name="desc" value="<?php echo $linha->descricao ?>"><br>
        Preço do carro<input type="number" step="0.01" name="preco" value="<?php echo $linha->preco ?>"><br>
        Marca<input type="text" name="marca" value="<?php echo $linha->marca ?>"><br>
        Modelo<input type="text" name="modelo" value="<?php echo $linha->modelo ?>"><br>
        Ano<input type="number" name="ano" value="<?php echo $linha->ano ?>"><br>
        Câmbio<input type="text" name="cambio" value="<?php echo $linha->cambio ?>"><br>
        Portas<input type="number" name="portas" value="<?php echo $linha->portas ?>"><br>
        Combustivel<input type="text" name="combustivel" value="<?php echo $linha->combustivel ?>"><br>
        Quilometragem<input type="number" name="quilometragem" value="<?php echo $linha->quilometragem ?>"><br>
        <input type="hidden" name="id" value="<?php echo $linha->idcarros ?>"><br>
        
        <br>
        <button type="button" onclick="duplicarCampos()">Adicionar Imagem</button><br>
        -----Imagens-----<br>
        
             <?php
 if ($executa2->rowCount()!=0){
     

    while($linha2=$executa2->fetch(PDO::FETCH_OBJ)){
        $name=$linha2->nome_imagem;
        
        ?>
<img src="imagens/<?php echo $linha2->nome_imagem ?> " id="<?php echo $name; ?>"><button type="button" id="<?php echo $name; ?>" onclick="editarimg(this.id)">deletar</button>
<br>
        <?php
        
    }
}
             ?>
              
              <div id="destino">
        </div>

        <input type="hidden" name="query" id="query" value="">
        <input type="hidden" name="imagemcount" id="count" value="1">
        <br><button type="submit">Salvar</button>
    </form>
</div>
</div>


<?php    
   
}else{
?> <div class="aaa">
<div class="bbb">
    <form action="cadastrar_dados.php" id="jsonForm" method="POST" enctype="multipart/form-data">
        Nome do carro<input type="text" name="nome"><br>
        Descriçao do carro<input type="text" name="desc"><br>
        Preço do carro<input type="number" name="preco"><br>
        Marca<input type="text" name="marca"><br>
        Modelo<input type="text" name="modelo"><br>
        Ano<input type="number" name="ano"><br>
        Câmbio<input type="text" name="cambio"><br>
        Portas<input type="number" name="portas"><br>
        Combustivel<input type="text" name="combustivel"><br>
        Quilometragem<input type="number" name="quilometragem"><br>
        <br>
        <button type="button" onclick="duplicarCampos()">Adicionar Imagem</button><br>
        -----Imagens-----<br>
        <div id="destino">
             
              
             
        </div>
        <input type="hidden" name="imagemcount" id="count" value="1">
        <br><button type="submit">Salvar</button>
    </form>
</div>
</div>
    <?php
}
?>
</body>
</html>
<script>
    $(document).ready(function() { 
//bind form using ajaxForm 
  $('#jsonForm').ajaxForm({ 
      // dataType identifies the expected content type of the server response 
      dataType:  'json', 
      
      // success identifies the function to invoke when the server response 
      // has been received 
      success:   function(data){
          if (data.status==1){
            
            $.growl.notice({ title:'Status:', message: data.mensagem });
            $("#jsonForm").trigger("reset");
          }else{
            $.growl.error({ message: data.mensagem });
          }
      } 
  })
}); 
function editarimg(id){
    if(!document.getElementById('query').value.includes(id)){
            $("#query").val($("#query").val()+","+id);
            document.getElementById(id).style.opacity=0.3;
    }
    
    
}
function deletarimagem(id){
    
     document.getElementById(id).remove();
     document.getElementById(id).remove();
     
    
}
    var count =1;
    function duplicarCampos(){
	var clone = '<input type="file" id="imag"  name="imagem" required >';
    var clone2= '<button type="button" id="buttom"  onclick="deletarimagem(this.id)">deletar imagem</button><br>  ';

 
	var destino = document.getElementById('destino');
	$("#destino").append(clone);
    $("#destino").append(clone2);
    
    clone=document.getElementById('imag');
    clone2=document.getElementById('buttom');
       clone.setAttribute("name","imagem"+count);
    
    clone.setAttribute("id","imagem"+count);
    clone2.setAttribute("id","imagem"+count);
    
	
	
    count++
    document.getElementById('count').value=count;
    }
</script>
<style type="text/css">
    .aaa{
        width: 100%;

    }
    .bbb{
        width: 50%;
        margin-left: 40%;


    }

</style>