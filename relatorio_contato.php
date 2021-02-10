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
        <th data-column-id="idcontato" data-type="numeric" id='identifier'> ID</th>
        <th data-column-id="nome">Nome</th>
        <th data-column-id="telefone" >Telefone</th>
        <th data-column-id="email">Email</th>
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
      



<script>
  var id;
  $(document).ready(function(){
      var grid = $("#grid-data-api").bootgrid({
          ajax: true,
          url: "mod_select_contato.php",
          formatters: {
              "commands": function(column, row)
              {
                  return "<button type=\"button\" class=\"btn btn-xs btn-default command-edit\" data-row-id=\"" + row.idcontato + "\"><span class=\"glyphicon glyphicon-plus\"></span></button> ";
              }

          }

      }).on("loaded.rs.jquery.bootgrid", function()
      {
          grid.find(".command-edit").on("click", function(e)
          {
             id = $(this).data("row-id");
             $("#myModal").modal();
          }).end().find(".command-delete").on("click", function(e)
          {
              document.location = 'editar_aluno.php?cod_cad_aluno=' + $(this).data("row-id");
          });
      });

      $('#myModal').on('show.bs.modal', function (event) {
          var url = "relatorio_contato_json.php?id=" + id;

            
          modal = $(this)
          $.getJSON(url, function(data){
            
              modal.find('.modal-title').text('Mais Informações de ' + data.firstName)
              modal.find('.modal-body').html( data.resultado)

              
            });
        });


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
                      
 