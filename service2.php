<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>
    Automotive - Estoque
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="index.html">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">
                    Sobre nós
                  </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="service.php">
                    Estoque
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Fale conosco</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- service section -->


      <?php
include('connect.php');

$id = $_GET['id'];


 $executa = $db->prepare("SELECT * FROM carros where idcarros =:id ");
  $executa->BindParam(':id',$id);

  $executa->execute();
  while($linha=$executa->fetch(PDO::FETCH_OBJ)) {

    $executa2 = $db->prepare("SELECT * FROM imagens_carros where idcarro=:id");
    $executa2->BindParam(':id',$id);
    $executa2->execute();
      




?>


     
  
<section class="contact_section layout_padding-bottom layout_padding2-top" id="fundo2">
    <div class="container px-0">
      
            </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-8 col-md-7 px-0">
          <div class="map_container">
            <div class="img-fluid">     
    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 960;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer; }
        .jssora093 .c {fill:none;stroke:#000;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#000;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:480px;overflow:hidden;visibility:hidden;background-color:#24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:240px;width:720px;height:480px;overflow:hidden;">
              <?php
              while($linha2=$executa2->fetch(PDO::FETCH_OBJ)) {
                ?>
            <div>
                <img data-u="image" src="imagens/<?php echo $linha2->nome_imagem ?>" />
                <img data-u="thumb" src="imagens/<?php echo $linha2->nome_imagem ?>" />
            </div>

               <?php
            }
            ?>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation composer</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;top:0px;width:240px;height:480px;background-color:#DCDCDC;" data-autocenter="2" data-scale-left="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:99px;height:66px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:270px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 px-0" id="fundo">
          <form action="" method="POST">
            <div>
              <input type="text" placeholder="<?php echo 'Marca: ' .  $linha->marca ?>" disabled  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Modelo: ' .  $linha->nome ?>" name="nome" disabled  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'R$ ' .  $linha->preco  ?>" name="preco" disabled  />
            </div>
            
            <div>
              <input type="text" class="message-box" placeholder="<?php echo 'Descrição: ' .  $linha->descricao ?>" disabled=""  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Ano: ' .  $linha->ano ?>" name="ano" disabled />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Câmbio: ' .  $linha->cambio ?>" name="cambio" disabled />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Portas: ' .  $linha->portas ?>" name="portas" disabled  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Combustivel: ' .  $linha->combustivel ?>" name="combustivel" disabled  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Quilometragem: ' .  $linha->quilometragem ?>" name="quilometragem" disabled  />
            </div>
            
          </form>
        </div>
      </div>
    </div>
  </section>


  <?php
}

?>
   

  <!-- end service section -->


  <!-- info section -->

    <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="https://facebook.com/multimarcas.automotive">
          <img src="images/fb.png" alt="">
        </a>
        <a href="https://instagram.com/automotive.revenda">
          <img src="images/instagram.png" alt="">
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              Sobre nós
            </h6>
            <p>
              Somos uma nova empresa começando com o ramo de revenda de carros na cidade de União da Vitória e região.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Instagram
            </h6>
            <p>
              @automotive.revenda
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              PRECISA DE AJUDA?
            </h6>
            <p>
              Contate-nos em nosso WhatsApp
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              Venha até nós
            </h6>
            <div  disabled class="info_link-box">
              <a disabled >
                <img src="images/location.png"  alt="">
                <span> Av Bento Munhoz da Rocha Neto n° 503 Loja 2  </span>
              </a>
              <a disabled >
                <img src="images/call.png"  alt="">
                <span>+55 (42) 9 8869-2001</span>
              </a>
              <a disabled >
                <img src="images/mail.png"  alt="">
                <span> automotivemultimarcas@hotmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <section class=" footer_section">
      <div class="container">
        <p>
         
        </p>
      </div>
    </section>
    <!-- footer section -->

  </section>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
    <style type="text/css">

    .navbar-brand img{
      width: 150px;

    }
    .carros{
      
      width:100%;
   
      
      
    }
    body{
      background-color:#ffffff;
      
    }
    #fundo{
      background-color: #DCDCDC;

    }
    
    

</style>
</body>

</html>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=5542988692001" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

 <style type="text/css">

   

    .float{
  position:fixed;
  width:60px;
  height:60px;
  bottom:40px;
  right:40px;
  background-color:#25d366;
  color:#FFF;
  border-radius:50px;
  text-align:center;
  font-size:30px;
  box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
  margin-top:16px;
}


</style>