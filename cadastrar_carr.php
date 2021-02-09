<?php
require_once("connect.php");
require_once("seguranca.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de carros</title>
</head>
<body>
    <form action="cadastrar_dados.php" method="POST" enctype="multipart/form-data">
        Nome do carro<input type="text" name="nome"><br>
        Descriçao do carro<input type="text" name="desc"><br>
        Preço do carro<input type="number" name="preco"><br>
        Marca<input type="text" name="marca"><br>
        Modelo<input type="text" name="modelo"><br>
        Ano<input type="number" name="ano"><br>
        Câmbio<input type="text" name="cambio"><br>
        Portas<input type="number" name="portas"><br>
        Combustivel<input type="text" name="combustivel"><br>
        Quilometragem<input type="number" name="quilometragem"><br>
        <br>
        <button type="button" onclick="duplicarCampos()">Adicionar Imagem</button>
        <div id="destino">
            -----Imagens-----<br> <input type="file" id="origem" name="imagem" ><br>
        </div>
        <input type="hidden" name="imagemcount" id="count" value="1">
        <br><button type="submit">Salvar</button>
    </form>
</body>
</html>
<script>
    var count =1;
    function duplicarCampos(){
	var clone = document.getElementById('origem').cloneNode(true);
    clone.setAttribute("name","imagem"+count)
    
	var destino = document.getElementById('destino');
	destino.appendChild (clone);
    destino.appendChild(document.createElement("br"));
	
	var camposClonados = clone.getElementsByTagName('input');
	
	for(i=0; i<camposClonados.length;i++){
		camposClonados[i].value = '';
	}
    count++
    document.getElementById('count').value=count;
    }
</script>