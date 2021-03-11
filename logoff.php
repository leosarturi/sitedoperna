<?php
    session_start();
$_SESSION['logado'] = 0;
  unset($_SESSION['logado']);
  session_destroy();

        header("Location: loginadmin.html");