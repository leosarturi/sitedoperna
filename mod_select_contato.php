<?php
//include('seguranca.php');
	include 'connect.php';
	require_once("seguranca.php");
	

$q = "SELECT idcontato, nome,email, telefone, mensagem as nome, email, telefone, mensagem FROM contato ";

$where = " 1 ";



$get_data['rows'] = array();

$mod_select = $db->prepare('SELECT COUNT(*) as total FROM contato ');
$mod_select->execute();
$mod_count = $mod_select->fetch(PDO::FETCH_OBJ); 
//print_r($mod_count);
$get_data['total'] = $mod_count->total;

if (isset($_POST['sort'])){
	$orderby = ' ORDER BY ';
	foreach($_POST['sort'] as $campo => $ordem){
		if ($campo=='idcontato'){
            $campo = 'nome';
        }
		$orderby .= "{$campo} {$ordem}, ";
	}
	
	$orderby = substr($orderby, 0, -2);
	
}else{
	$orderby = '';
}
$mod_sel = $db->prepare($q);
$mod_sel->execute();

$get_data['rows'] = $mod_sel->fetchAll();

//$get_data['current'] = $_POST['current'];
//$get_data['rowCount'] = $mod_sel->rowCount();
//$get_data['searchPhrase'] = $_POST['searchPhrase'];

echo json_encode($get_data);

?>