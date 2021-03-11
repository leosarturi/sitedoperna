<?php
session_start();

// if(isset($_SESSION['logado'])){
//     //$_SESSION['logado']=0;
// }
// if($_SESSION[ 'logado' ]!=1){
    
//     echo $_SESSION['logado'];
//     //header('Location: loginadmin.html');
// }

if (!isset($_SESSION['logado']) or $_SESSION['logado']<>1){
    header("Location: loginadmin.html");
    exit;
}
?>