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
     <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">
                    <?php
    while($linha2=$executa2->fetch(PDO::FETCH_OBJ)){
 

$url ="imagens/" . $linha2->nome_imagem;
//echo $url;
?>

<!-- <img src="  <?php echo $url; ?>" class="foto" width = "650px" height = "365px" > -->
 <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 px-0">

                    <div class="img-box">
                      <img src="<?php echo $url ?> " width = "650px" height = "365px" alt="" />
                    </div>
                </div>
            </div>
        </div>
                  
  <?php
    }
?>
</div>
                  <div class="col-md-6">
                    <div class="detail-box">
                      <h1>
                        <?php 
                        echo $nome;
                        ?>
                        <br />
                        <?php 
                        echo $preco;
                        ?>
                      </h1>
                      <p>
                        <?php 
                        echo 'R$'.$descricao;
                        ?>
                      </p>
                      <a href="">
                        Fale com nós
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                    <div class="detail-box">
                    </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="detail-box">
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="sr-only">Anterior</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="sr-only">Proximo</span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
}
?>


    <!-- end slider section -->
  </div>

</body>

<style>
    #nome{
        font-size: 15;

    }
    .foto{
         position: relative;
  right: 300px;


    }

  </style>  
</html>