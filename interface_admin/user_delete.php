<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet a l'administrateur de supprimer des utilisateurs en renseignant des informations dans le formulaire .
le traitement de suppression dans la bdd n'est pas encore fait ,les données saisies dans le formulaire sont récuperés dans un fichiers php ! 

Changements: correction des formulaires.

*/
?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "utf-8">
    <link rel = "shortcut icon" href = "img/favicon.png">
    <title> Suppression utilisateur </title>
    <!-- Bootstrap CSS -->    
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <!-- bootstrap theme -->
    <link href = "css/bootstrap-theme.css" rel = "stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href = "css/elegant-icons-style.css" rel = "stylesheet" />
    <link href = "css/font-awesome.min.css" rel = "stylesheet" />
    <!-- date picker -->
    <!-- color picker -->
    <!-- Custom styles -->
    <link href = "css/style.css" rel = "stylesheet">
    <link href = "css/style-responsive.css" rel = "stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src = "js/html5shiv.js"></script>
    <script src = "js/respond.min.js"></script>
    <script src = "js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- container section start -->
    <section id = "container" class = "">
    <?php
		include('./php/checkAuth.php');
		include('menu.php');
		verifAuth(4);
    ?>
    <!--main content start-->
    <section id = "main-content">
    <section class = "wrapper">
      <div class = "row">
        <div class = "col-lg-12">
		  <!-- Titre de la section -->
          <h3 class = "page-header"><i class = "fa fa-file-text-o"></i> Suppression utilisateurs </h3>
          <ol class = "breadcrumb">
            <li><i class = "fa fa-home"></i><a href = "index.php"> Home </a></li>
          </ol>
        </div>
      </div>
      <div class = "row">
      <div class = "col-lg-12">
      <section class = "panel">
        <header class = "panel-heading">
          Suppression utilisateur
        </header>
        <div class = "panel-body">
		  <!-- Zone de texte permettant de saisir l'adresse mail de l'utilisateur -->
          <form class = "form-horizontal " method = "post"  action = "form_delete_user.php">
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Adresse Email </label>
              <div class = "col-sm-10">
                <input type = "email" class = "form-control" name = "email" required>
              </div>
            </div>
            <!-- <div class = "form-group">
              <label class = "col-sm-2 control-label">Utilisateurs</label>
              <div class = "col-sm-10">
               <select name = "email" class = "form" id = "email"></select>
              </div>
              </div> -->
			
			<!-- Bouton permettant de valider le formulaire et de rediriger vers la page de création du fichier json -->
            <div class = "form-group" align = "center">
              <div class = "col-sm-10">
                <input type = "submit" name = "button" value = "delete"></input>&nbsp
              </div>
            </div>
          </form>
        </div>
      </section>
      <!--main content end-->
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src = "js/jquery.js"></script>
    <script src = "js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src = "js/jquery.scrollTo.min.js"></script>
    <script src = "js/jquery.nicescroll.js" type = "text/javascript"></script>
    <!-- jquery ui -->
    <script src = "js/jquery-ui-1.9.2.custom.min.js"></script>
    <!--custom checkbox & radio-->
    <script type = "text/javascript" src = "js/ga.js"></script>
    <!--custom switch-->
    <script src = "js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src = "js/jquery.tagsinput.js"></script>
    <!-- colorpicker -->
    <!-- bootstrap-wysiwyg -->
    <script src = "js/jquery.hotkeys.js"></script>
    <script src = "js/bootstrap-wysiwyg.js"></script>
    <script src = "js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type = "text/javascript" src = "assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src = "js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src = "js/scripts.js"></script>
  </body>
</html>