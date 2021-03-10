<?php
require_once("seguranca.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
<section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">

            </div>
            </div>
            </section>

            <body>
            <table id="grid-data-api" class="table table-condensed table-hover table-striped" >
    <thead>
      <tr>
        <th data-column-id="nome">Nome</th>
        <th data-column-id="preco" >Preço</th>
        <th data-column-id="marca">Marca</th>
        <th data-column-id="modelo">Modelo</th>
        <th data-column-id="ano">Ano</th>
        <th data-column-id="cambio">Cambio</th>
        <th data-column-id="portas">Portas</th>
        <th data-column-id="combustivel">Combustivel</th>
        <th data-column-id="quilometragem">KM</th>
        <th data-column-id="commands" data-formatter="commands" data-sortable="false" ></th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Mais Informações de </h4>
      </div>
      <div class="modal-body" id="conteudoModal">     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
      </div>
    </div>

  </div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery.growl.css">
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/jquery.bootgrid.min.js"></script>
<script src="js/jquery.bootgrid.fa.min.js"></script>

  <!-- <script src="js/jquery.js"></script> -->
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  



    <!--custome script for all page-->
  <script src="js/scripts.js"></script>
      <script src="js/jquery.mask.js"></script>
      

 <script src="js/jquery.growl.js"></script>
    <script src="js/jquery.form.js"></script>

<script>
  var id;
  function atualizar(){
    console.log("asd");
    var grid = $("#grid-data-api").bootgrid({
          ajax: true,
          url: "mod_select_carros.php",
          formatters: {
              "commands": function(column, row)
              {
                  return "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.idcarros + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>" +"<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.idcarros + "\"><span class=\"glyphicon glyphicon-edit\"></span></button>";
              }

          }

      });
  }
  $(document).ready(function(){
      var grid = $("#grid-data-api").bootgrid({
          ajax: true,
          url: "mod_select_carros.php",
          formatters: {
              "commands": function(column, row)
              {
                  return "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.idcarros + "\"><span class=\"glyphicon glyphicon-trash\"></span></button>" +"<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.idcarros + "\"><span class=\"glyphicon glyphicon-edit\"></span></button>";
              }

          }

      }).on("loaded.rs.jquery.bootgrid", function()
      {
          grid.find(".command-edit").on("click", function(e)
          {
            document.location = 'cadastrar_carr.php?idcarros=' + $(this).data("row-id");
          }).end().find(".command-delete").on("click", function(e)
          {
              //document.location = 'deletar_carros.php?idcarros=' + $(this).data("row-id");
              $.ajax({
  url: 'deletar_carros.php?idcarros=' + $(this).data("row-id"),
  dataType:'json',
  success: function(data){
    setTimeout(function(){location.reload();},1500);
  $.growl.notice({ title:'Status:', message: data.mensagem });

  }
  }
  

 
);
          });
      });

      $('#myModal').on('show.bs.modal', function (event) {
          var url = "relatorio_carros_json.php?id=" + id;

            
          modal = $(this)
          $.getJSON(url, function(data){
            
              modal.find('.modal-title').text('Mais Informações de ' + data.firstName)
              modal.find('.modal-body').html( data.resultado)

              
            });
        });


  });
  $(document).ready(function() { 
//bind form using ajaxForm 
  $('#jsonForm').ajaxForm({ 
      // dataType identifies the expected content type of the server response 
      dataType:  'json', 
      
      // success identifies the function to invoke when the server response 
      // has been received 
      success:   function(data){
          if (data.status==1){
            
            $.growl.notice({ title:'Status:', message: data.mensagem });
            $("#jsonForm").trigger("reset");
          }else{
            $.growl.error({ message: data.mensagem });
          }
      } 
  })
}); 
</script>
  
</body>
</html>
            </li>     
            </tbody>
            </table>  
        </div>
        </div>

      </div>
<div class="btn-group">
                        
                        
                      </div>
                      
 