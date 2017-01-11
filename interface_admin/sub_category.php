<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet a l'administrateur de visualiser la liste des sous catégories , faire des recherches ,d'ajouter,modifier ou supprimer des sous catégories .
le traitement d'ajout,modification et suppression dans la bdd n'est pas encore fait ,les données saisies dans les formulaires sont récuperés dans des fichiers php ! 

Changements: correction des formulaires.

*/
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Gestion des sous-categories</title>
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
    
  </head>
  <body>
    <!-- container section start -->
    <section id="container" class="">
    <?php
		session_start();
		include('./php/checkAuth.php');
		include('menu.php');
		verifAuth(2);
    ?>
    <!--main content start-->
    <section id="main-content">
    <section class="wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-file-text-o"></i>Sous Catégories</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="accueil.html">Home</a></li>
          </ol>
        </div>
      </div>
      <div class="row">
      <div class="col-lg-12">
      <section class="panel">
        <header class="panel-heading">
          Ajout sous catégorie
        </header>
        <div class="panel-body">
          <form class="form-horizontal " method="post" action="form_sub_category.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nom sous catégorie</label>
              <div class="col-sm-10">
                <input type="text" name="sub_category" class="form-control" placeholder="Saisir le nom de la ville">
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Catégorie</label>
              <select name="category">
                <option> Catégorie 1</option>
                <option> Catégorie 2 </option>
                <option> Catégorie 3 </option>
                <option> Catégorie 4 </option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </form>
        </div>
      </section>
	  <?php
		if($_SESSION['level'] > 2){
			print('
			  <div class="row">
				<div class="col-lg-12">
				  <section class="panel">
					<header class="panel-heading">
					  Liste des sous catégories
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
							<th class="col-md-5 col-xs-5">Sous catégorie</th>
							<th>Catégorie</th>
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
							<td>Sous Catégorie 1</td>
							<td>Catégorie 1</td>
							<td>
							  <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" > <span class="glyphicon glyphicon-pencil"></span></button></p>
							</td>
							<td>
							  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
							</td>
						  </tr>
						  <tr>
							<th scope="row">2</th>
							<td>Sous Catégorie 2</td>
							<td> Catégorie 2</td>
							<td>
							  <p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p>
							</td>
							<td>
							  <p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p>
							</td>
						  </tr>
						  <tr>
							<th scope="row">3</th>
							<td>Sous Catégorie 3</td>
							<td>Catégorie 3</td>
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
							  <h4 class="modal-title custom_align" id="Heading">Modification sous catégorie</h4>
							</div>
							<div class="modal-body">
							  <div class="form-group">
								<label>Nom sous catégorie</label>
								<input class="form-control " type="text" >
							  </div>
							  <div class="form-group">
								<label>Catégorie</label>
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
							  <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Voulez vous vraiment supprimer l\'enregistrement?</div>
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
			  </div>');
		}
	  ?>
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