<?php
require_once("connect.php");
require_once("seguranca.php");
include_once("include_once.php");
$id = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automotive - Admin</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="">Automotive</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="active nav-item">
                    <a href="javascript:;" class="nav-link">
                     	<?php
					echo $_SESSION['usuario'];
                     	?>
                    </a>
                  </li>
                  <li class="dropdown nav-item">
                  <a href="javascript:;" class="dropdown-toggle nav-link" data-toggle="dropdown">Configurações</a>
                      <div class="dropdown-menu">
                        <h6 class="dropdown-header">Cadastros</h6>
                        <a href="cadastrar_carr.php" class="dropdown-item">Cadastrar carros</a>
                        <div class="dropdown-divider"></div>
                         <h6 class="dropdown-header">Relatorios</h6>
                        <a href="relatorio_carros.php" class="dropdown-item">Carros cadastrados</a>
                        <a href="relatorio_contato.php" class="dropdown-item">Mensagens recebidas</a>
                        <div class="dropdown-divider"></div>
                        <a href="logoff.php" class="dropdown-item">Sair</a>
                      </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>


        <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.7" type="text/javascript"></script>
</body>
</html>