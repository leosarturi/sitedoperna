<?php
try {
    include ("connect.php");
    include  ("seguranca.php");



    $pdo = $db;

    if(!$db){
        die('Erro ao criar a conexão');
    }

    $executa = $db->prepare("INSERT INTO contato (nome,email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)");
    $executa->bindParam (':nome', $_POST['nome']);
    $executa->bindParam (':email', $_POST['email']);
    $executa->bindParam (':telefone', $_POST['telefone']);
    $executa->bindParam (':mensagem', $_POST['mensagem']);

    $resultado = $executa->execute();

    if($resultado){
        $ret['status'] = 1;
        $ret['mensagem'] = 'Dados inseridos com sucesso!';
      
    } else {
        $ret['status'] = 0;
        $ret['mensagem'] = 'Erro ao inserir';
    }


    echo json_encode($ret);
    exit;

} catch(Exception $e){
    $ret['status'] = 0;
    $ret['mensagem'] = 'Erro ao inserir: ' . $e->getMessage();
    echo json_encode($ret);
//    echo $e->getMessage();
//send errors to system error reporting
}


