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

  <section class="service_section layout_padding-bottom layout_padding2-top">
 
      <div class="heading_container">
        <h2>
          Es<span>to</span>que
        </h2>
<div class="carros">
        <?php
        include("listarcarros.php");
        ?>

      </div>
      </div>
   
  </section>

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