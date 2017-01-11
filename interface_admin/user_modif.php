<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet a l'administrateur de modifier des utilisateurs en renseignant des informations dans le formulaire .
le traitement de modification dans la bdd n'est pas encore fait ,les données saisies dans le formulaire sont récuperés dans un fichiers php ! 

Changements: correction des formulaires.

*/
 ?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "utf-8">
    <link rel = "shortcut icon" href = "img/favicon.png">
    <title> Modification des permissions d'un utilisateur </title>
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
	  <!-- Titre de la section -->
      <div class = "row">
        <div class = "col-lg-12">
          <h3 class = "page-header"><i class = "fa fa-file-text-o"></i> Modification des permissions d'un utilisateur </h3>
          <ol class = "breadcrumb">
            <li><i class = "fa fa-home"></i><a href = "index.php"> Home </a></li>
          </ol>
        </div>
      </div>
      <div class = "row">
      <div class = "col-lg-12">
      <section class = "panel">
        <header class = "panel-heading">
          Modification utilisateur
        </header>
        <div class = "panel-body">
          <form class = "form-horizontal " method = "post" action = "form_modify_user.php">
			<!-- Zone de texte permettant de saisir l'adresse mail de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Adresse Email </label>
              <div class = "col-sm-10">
                <input type = "email" class = "form-control" name = "email" required>
              </div>
            </div>
			
		    <!-- Zone à selection unique permettant de choisir le niveau de permission de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Niveau de permission </label>
              <div class = "col-sm-10">
                <!-- <input type = "checkbox" name = "1" id = "perm_1" /> <label for = "1">1</label>&nbsp
                  <input type = "checkbox" name = "2" id = "perm_2" /> <label for = "2">2</label>&nbsp
                  <input type = "checkbox" name = "3" id = "perm_3" /> <label for = "3">3</label>&nbsp
                  <input type = "checkbox" name = "4" id = "perm_4" /> <label for = "4">4</label>&nbsp
                  <input type = "checkbox" name = "5" id = "perm_5" /> <label for = "5">5</label>&nbsp -->
                <input type = "radio" name = "permission" value = "1" required> 1 </input>&nbsp
                <input type = "radio" name = "permission" value = "2" required> 2 </input>&nbsp
                <input type = "radio" name = "permission" value = "3" required> 3 </input>
              </div>
            </div>
			
			<!-- Bouton permettant de valider le formulaire et de rediriger vers la page de création du fichier json -->
            <div class = "form-group" align = "center">
              <div class = "col-sm-10">
                <input type = "submit" name = "button" value = "modify"></input>&nbsp
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