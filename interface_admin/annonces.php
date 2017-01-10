<!DOCTYPE html>
<html lang="en">
  <?php
    include('./php/checkAuth.php');
    ?>
  <head>
    <meta charset="utf-8">
    
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Gestion des annonces</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    <!-- color picker -->
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/divert_style.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <script>
      $(document).ready(function() {
      $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('.results tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
        
      $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
            return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
        }
      });
        
      $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','false');
      });
      
      $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
        $(this).attr('visible','true');
      });
      
      var jobCount = $('.results tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');
      
      if(jobCount == '0') {$('.no-result').show();}
        else {$('.no-result').hide();}
          });
      });
          $(document).ready(function(){
      $("#mytable #checkall").click(function () {
              if ($("#mytable #checkall").is(':checked')) {
                  $("#mytable input[type=checkbox]").each(function () {
                      $(this).prop("checked", true);
                  });
      
              } else {
                  $("#mytable input[type=checkbox]").each(function () {
                      $(this).prop("checked", false);
                  });
              }
          });
          
          $("[data-toggle=tooltip]").tooltip();
      });
      
    </script>
    
   
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
    <?php
      include('menu.html');
      ?>
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Annonces</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="accueil.html">Home</a></li>
          </ol>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
      <div class="row">
        <div class="col-lg-12">
          <section class="panel">
            <header class="panel-heading">
              Liste des annonces
            </header>
            <div class="panel-body">
              <div class="form-group pull-right">
                <input type="text" class="search form-control" placeholder="Que cherchez vous?">
              </div>
              <span class="counter pull-right"></span>
              <table class="table table-hover table-bordered results">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="col-md-5 col-xs-5">Date</th>
                    <th >Utilisateur</th>
                    <th>titre</th>
                    <th>Sous Catégorie</th>
                    <th>Supprimer</th>
                  </tr>
                  <tr class="warning no-result">
                    <td colspan="4"><i class="fa fa-warning"></i> Aucun résultat</td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>12/01/2016</td>
                    <td>Utilisateur 1</td>
                    <td>Annonce 1</td>
                    <td>Vere</td>
                    <td>
                      <p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>22/05/2016</td>
                    <td>Utilisateur 2</td>
                    <td>Annonce 2</td>
                    <td>Métal</td>
                    <td>
                      <p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>02/12/2016</td>
                    <td>Utilisateur 3</td>
                    <td>Annonce 3</td>
                    <td>Vere</td>
                    <td>
                      <p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>30/10/2016</td>
                    <td>Utilisateur 4</td>
                    <td>Annonce 4</td>
                    <td>Métal</td>
                    <td>
                      <p data-placement="top" data-toggle="tooltip"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                      <h4 class="modal-title custom_align" id="Heading">Supprimer</h4>
                    </div>
                    <div class="modal-body">
                      <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Voulez vous vraiment supprimer l'enregistrement?</div>
                    </div>
                    <div class="modal-footer ">
                      <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Oui</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Non</button>
                    </div>
                  </div>
                  <!-- /.modal-content --> 
                </div>
                <!-- /.modal-dialog --> 
              </div>
            </div>
          </section>
        </div>
      </div>
      <!--main content end-->
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    <!-- colorpicker -->
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>
  </body>
</html>