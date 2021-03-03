<?php
include('connect.php');

$id = $_GET['id'];


 $executa = $db->prepare("SELECT * FROM carros where idcarros =:id ");
  $executa->BindParam(':id',$id);

  $executa->execute();
  while($linha=$executa->fetch(PDO::FETCH_OBJ)) {




?>


     
  
<section class="contact_section layout_padding-bottom layout_padding2-top">
    <div class="container px-0">
      
            </div>
    <div class="container container-bg">
      <div class="row">
        <div class="col-lg-8 col-md-7 px-0">
          <div class="map_container">
            <div class="img-fluid">
              <iframe src="imagens/gragas.jpg" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-4 px-0">
          <form action="inserir_contato.php" method="POST">
            <div>
              <input type="text" placeholder="<?php echo 'Marca: ' .  $linha->marca ?>" disabled  />
            </div>
            <div>
              <input type="text" placeholder="<?php echo 'Modelo: ' .  $linha->nome ?>" name="nome" disabled  />
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