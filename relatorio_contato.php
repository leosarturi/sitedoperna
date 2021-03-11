<?php
require_once("seguranca.php");
include("home.php");
?>

   <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
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



  <div class="modal fade show" id="myModal" tabindex="-1"  role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>


        <div class="modal-body">
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-link">Nice Button</button>
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" rel="stylesheet">
<link href="css/jquery.growl.css" rel="stylesheet">

<script src="js/jquery.bootgrid.min.js"></script>
<script src="js/jquery.bootgrid.fa.min.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  



    <!--custome script for all page-->
  <script src="js/scripts.js"></script>
      <script src="js/jquery.mask.js"></script>
      <script src="js/jquery.growl.js"></script>
      

      
      <?php
if(isset($_GET['status'])){
  
  $status =$_GET['status'];


  ?>
  <script>
  

  var status = "<?php echo $status; ?>";
if(status==1){


            $.growl.notice({ title:'Status:', message: "sucesso" } );
}else if(status==0){
  $.growl.error({ title:'Status:', message: "erro" } );
}


  


  </script>
  <?php
}
?>


<script>
  var id;
  $(document).ready(function(){
      var grid = $("#grid-data-api").bootgrid({
          ajax: true,
          url: "mod_select_contato.php",
          formatters: {
              "commands": function(column, row)
              {
                  return "<button type=\"button\"  class=\"btn btn-xs btn-default command-edit\" data-toggle=\"modal\" data-target=\"#myModal\" data-row-id=\"" + row.idcontato + "\"><span class=\"fa fa-plus-square\"></span></button> " +
                                    "<button type=\"button\" class=\"btn btn-xs btn-default command-delete\" data-row-id=\"" + row.idcontato + "\"><span class=\"fa fa-trash\"></span></button>" ;
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
            $.ajax({ 
      // dataType identifies the expected content type of the server response 
      dataType:  'json', 
      url:'deletar_contato.php?idcontato=' + $(this).data("row-id"),
      // success identifies the function to invoke when the server response 
      // has been received 
      success:   function(data){
        window.location.href="relatorio_contato.php?status="+data.status;
          if (data.status==1){
            
            $.growl.notice({ title:'Status:', message: data.mensagem });
            $("#jsonForm").trigger("reset");
          }else{
            $.growl.error({ message: data.mensagem });
          }
      } 
  })
              document.location = 'deletar_contato.php?idcontato=' + $(this).data("row-id");
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
                      
 