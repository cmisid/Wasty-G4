<!DOCTYPE html>
<html lang="en">
  <?php
    include('./php/checkAuth.php');
    ?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Gestion des points de collecte</title>
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
    </script>
    <script>
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
    <style>
      body{
      padding:20px 20px;
      }
      .results tr[visible='false'],
      .no-result{
      display:none;
      }
      .results tr[visible='true']{
      display:table-row;
      }
      .counter{
      padding:8px; 
      color:#ccc;
      }
    </style>
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
          <h3 class="page-header"><i class="fa fa-file-text-o"></i> Points de collecte</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="accueil.html">Home</a></li>
          </ol>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading">
            Ajout point de collecte
          </header>
          <div class="panel-body">
            <form class="form-horizontal " method="get">
              <div class="form-group">
                <label class="col-sm-2 control-label">Adresse</label>
                <div class="dropdown col-sm-10">
                  <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
                  <span class="caret"></span></button>
                  <ul    class="dropdown-menu" role="menu" aria-labelledby="menu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adresse 1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adresse 2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adresse 3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Adresse 4</a></li>
                  </ul>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Type récupération</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Saisir la densité">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
          </form>
      </div>
      </section>
      <div class="row">
      <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Liste des points de collecte
        </header>
        <div class="panel-body">
          <div class="form-group pull-right">
            <input type="text" class="search form-control" placeholder="What you looking for?">
          </div>
          <span class="counter pull-right"></span>
          <table class="table table-hover table-bordered results">
            <thead>
              <tr>
                <th>#</th>
                <th class="col-md-5 col-xs-5">Adresse</th>
                <th>Type récuperation</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              <tr class="warning no-result">
                <td colspan="4"><i class="fa fa-warning"></i> No result</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>87 rue des fleurs</td>
                <td>Type récuperation 1</td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" > <span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>22 rue maurice bécanne</td>
                <td> Type récuperation 2</td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>13 rue de narbonne</td>
                <td>Type récuperation 3</td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
                </td>
                <td>
                  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                  <h4 class="modal-title custom_align" id="Heading">Modification point de collecte</h4>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Adresse</label>
                    <input class="form-control " type="text" >
                  </div>
                  <div class="form-group">
                    <label>Type récuperation</label>
                    <input class="form-control " type="text" >
                  </div>
                </div>
                <div class="modal-footer ">
                  <button type="button" class="btn btn-warning btn-lg" style="width: 100%;">Modifier </button>
                </div>
              </div>
              <!-- /.modal-content --> 
            </div>
            <!-- /.modal-dialog --> 
          </div>
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