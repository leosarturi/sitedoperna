
<?php

require_once("connect.php");

$executa = $db->query("select * from carros");



while ($linha = $executa->fetch(PDO::FETCH_OBJ)){
  $nomearray= array();
   $nome = $linha->nome; 
   
    $preco = $linha->preco;
   
    $descricao = $linha->descricao;
   
    $executa2=$db->prepare("select * from imagens_carros where idcarro=:id");
    $executa2->BindParam(':id',$linha->idcarros);
    $executa2->execute();
    
    
                   
                   
               
                          
                              
                                


      ?>                       
    <a href="service2.php?id=<?php echo $linha->idcarros?>"id="carro"><div id="carouselExampleControls<?php echo $linha->idcarros?>" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

    <?php

    while($linha2=$executa2->fetch(PDO::FETCH_OBJ)){
      $nome = array($linha2->nome_imagem); 
      
      
      

      $nomearray= array_merge($nomearray,$nome);






                                 
                                 

 
                  
                
  
    }
    
    
  
     
                
                           
 
   
   
   foreach($nomearray as $key=>$valor){
    $url ="imagens/" . $valor;
    if($key==0){
      
    ?>
    <div class="carousel-item active">
    <?php
      
    }else{

      

   ?>
     <div class="carousel-item">
   <?php
  
  





   }
   ?>
<img class="d-block w-100 img-box" src="<?php echo $url ?>" alt="First slide">
</div>
<?php
  }

?>
</div>
<div class="detalhes"> 

<?php 
echo '<div class="nome">' .  $linha->nome . '</div>'; 
?>


<?php
echo '<div class="preco">' ."R$" .  $linha->preco . '</div>';
echo '<div class="ano">' . $linha->ano . '</div>';
?>

</div>


<?php
if(sizeof($nomearray)>1){
  ?>
<a class="carousel-control-prev" href="#carouselExampleControls<?php echo $linha->idcarros?>" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls<?php echo $linha->idcarros?>" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php
}
  ?>
</div></a>
<?php

          
                       
                      

    

}


?>
</div>
</body>  
</html>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    


<style>
.carousel-control-prev-icon,
.carousel-control-next-icon {
    
  background-color:black;
  
  
  
}




.nome, .ano,.preco{

}
#carro{
  
  color:white;
}


.carousel:hover{
  border-color: #fbac2e;
  background-color:#fbac2e;
}
.carousel{
  border: 3px solid black;
  float:left;
  margin-left:2.5%;
  margin-top:2%;
  background-color:#000;
  
  
  width:30%;
  
  
  
}
  .carousel-inner{
   
    
    
    width:100%;
    
    
    
  }
  .carousel-item.active{
    width:100%;
    
    
    
  }


  </style>  
<script>
$('.carousel').carousel();
</script>