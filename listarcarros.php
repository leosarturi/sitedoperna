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
  $nomearray= array();
   $nome = $linha->nome; 
   echo "<br>";
    $preco = $linha->preco;
    echo "<br>";
    $descricao = $linha->descricao;
    echo "<br>";
    $executa2=$db->prepare("select * from imagens_carros where idcarro=:id");
    $executa2->BindParam(':id',$linha->idcarros);
    $executa2->execute();
    ?>
    
                   
                   
               
                          
                              
                                

<?php
                             


    while($linha2=$executa2->fetch(PDO::FETCH_OBJ)){
      $nome = array($linha2->nome_imagem); 
      
      
      

      $nomearray= array_merge($nomearray,$nome);



//echo $url;
?>
 

                                 
                                 
<!-- <img src="  " class="foto" width = "650px" height = "365px" > -->
 
                  
                
                  
  <?php
    }
    
    
?>
    <section class="slider_section">
    <div class="slider_container">
      <div id="carouselExampleIndicators<?php echo $linha->idcarros ?>" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
                
                           
 
   <?php
   
   foreach($nomearray as $key=>$valor){
    $url ="imagens/" . $valor;
    if($key==0){
      
      ?>
<div class="carousel-item  active">
      <?php 
      
      
    }else{

      ?>

<div class="carousel-item  ">
  <?php
    }
?>     
  
  
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <div class="img-box">
                    <img src="<?php echo $url; ?>" width="450" height="300" alt="" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        <?php echo $linha->nome ?>
                      </h1>
                      <h1 name="preco">
                         <?php echo $linha->preco ?>
                      </h1>
                      <p>
                        <?php echo $linha->descricao ?>
                      </p>
                      <a href="">
                        Mostrar mais
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>



<?php
   }


?>

</div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators<?php  echo $linha->idcarros ?>" role="button" data-slide="prev">
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators<?php  echo $linha->idcarros ?>" role="button" data-slide="next">
              <span class="sr-only">Proximo</span>
            </a>
          </div>
        </div>
      </div>
    </section>
                        
                       
                      

               
    <?php
}
?>


    <!-- end slider section -->
  </div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script type="text/javascript" src="js/custom.js"></script>
</body>

<style>
    #nome{
        font-size: 15;

    }
    .foto{
         position: relative;
  right: 300px;


    }
    #preco{
        color: red;

    }
     

    .navbar-brand img{
      width: 150px;

    }


  </style>  
</html>