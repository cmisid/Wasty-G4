<?php
/* 
Groupe[4] 
Version : V2.1.2

Ce fichier permet a l'administrateur d'ajouter des utilisateurs en renseignant des informations dans le formulaire .
le traitement d'ajout dans la bdd n'est pas encore fait ,les données saisies dans le formulaire sont récuperés dans un fichiers php ! 

Changements: correction des formulaires.

*/
 ?>
<!DOCTYPE html>
<html lang = "en">
  <head>
    <meta charset = "utf-8">
    <link rel = "shortcut icon" href = "img/favicon.png">
    <title> Ajout utilisateur </title>
    <!-- Bootstrap CSS -->    
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <!-- bootstrap theme -->
    <link href = "css/bootstrap-theme.css" rel = "stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href = "css/elegant-icons-style.css" rel = "stylesheet"/>
    <link href = "css/font-awesome.min.css" rel = "stylesheet"/>
    <!-- date picker -->
    <!-- color picker -->
    <!-- Custom styles -->
    <link href = "css/style.css" rel = "stylesheet">
    <link href = "css/style-responsive.css" rel = "stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- container section start -->
    <section id = "container" class = "">
    <?php
		session_start();
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
          <h3 class = "page-header"><i class = "fa fa-file-text-o"></i> Ajout d'un utilisateur </h3>
          <ol class = "breadcrumb">
            <li><i class = "fa fa-home"></i><a href = "index.php"> Home </a></li>
          </ol>
        </div>
      </div>
      <div class = "row">
      <div class = "col-lg-12">
      <section class = "panel">
        
		<header class = "panel-heading">
      Ajout utilisateur <?php print($_SESSION['level']); ?>
        </header> 
        <div class = "panel-body">
          <form class = "form-horizontal" method = "post" action = "form_add_user.php">
		    <!-- Zone de texte permettant de saisir le nom de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Nom </label>
              <div class = "col-sm-10">
                <input type = "text" class = "form-control" name = "last_name" id = "last_name" required>
              </div>
            </div>
			<!-- Zone de texte permettant de saisir le prenom de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Prenom </label>
              <div class = "col-sm-10">
                <input type = "text" class = "form-control" name  = "first_name" id = "first_name" required>
              </div>
            </div>
			<!-- Zone de texte permettant de saisir l'adresse email de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Adresse Email </label>
              <div class = "col-sm-10">
                <input type = "email" class = "form-control" name = "email" id = "email" required>
              </div>
            </div>
			<!-- Zone de texte permettant de saisir le mot de passe du compte de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Password </label>
              <div class = "col-sm-10">
                <input type = "text"  class = "form-control" name = "password" id = "password" required>
              </div>
            </div>
			
			<!-- Calendrier permettant de saisir ou de selectionner la date de naissance de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Date de naissance </label>
              <div class = "col-sm-10">
                <input type = "date" name = "birthday" required>
              </div>
            </div>
			
			<!-- Zone à selection unique permettant de choisir le sexe de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Sexe </label>
              <div class = "col-sm-10">
                <input type = "radio" name = "gender" value = "male" required> Homme </input>&nbsp
                <input type = "radio" name = "gender" value = "female" required> Femme </input>
              </div>
            </div>
			
			<!-- Zone de texte permettant de saisir le numero de telephone de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Téléphone </label>
              <div class = "col-sm-10">
                <input type = "text" class = "form-control" name = "phone_number" required>
              </div>
            </div>
			
            <!--<div class = "form-group">
              <label class = "col-sm-2 control-label">Photo</label>
              <div class = "col-sm-10">
                   <input type = "file" name = "photo">
              
              </div>
              </div>-->
			
			<!-- Zone à selection unique permettant de choisir le niveau de permission de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Niveau de permission </label>
              <div class = "col-sm-10">
                <!--<input type = "checkbox" name = "niv_permission[]" id = "perm_1" value = "1"/> <label for = "perm_1">1</label>&nbsp
                  <input type = "checkbox" name = "niv_permission[]" id = "perm_2" value = "2"/> <label for = "perm_2">2</label>&nbsp
                  <input type = "checkbox" name = "niv_permission[]" id = "perm_3" value = "3"/> <label for = "perm_3">3</label>&nbsp
                  <input type = "checkbox" name = "niv_permission[]" id = "perm_4" value = "4"/> <label for = "perm_4">4</label>&nbsp
                  <input type = "checkbox" name = "niv_permission[]" id = "perm_5" value = "5"/> <label for = "perm_5">5</label>&nbsp-->
                <input type = "radio" name = "permission" value = "1" required> 1 </input>&nbsp
                <input type = "radio" name = "permission" value = "2" required> 2 </input>&nbsp
                <input type = "radio" name = "permission" value = "3" required> 3 </input>&nbsp
              </div>
            </div>
			
			<!-- Zone à selection unique permettant de choisir la taille du véhicule (s'il en possède un) de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Taille du véhicule </label>
              <div class = "col-sm-10">
                <input type = "radio" name = "car_size" value = "petit"> petit </input>&nbsp
                <input type = "radio" name = "car_size" value = "moyen"> moyen </input>&nbsp
                <input type = "radio" name = "car_size" value = "grand"> grand </input>
              </div>
            </div>
			
			<!-- Zone à selection unique permettant de choisir si l'utilisateur est superviseur ou non -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Superviseur </label>
              <div class = "col-sm-10">
                <input type = "radio" name = "supervisor" value = "True" > Oui </input>&nbsp
                <input type = "radio" name = "supervisor" value = "False" checked> Non </input>
              </div>
            </div>
			
			<!-- Zone à selection unique permettant de choisir si l'utilisateur est un membre du staff ou non -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Membre du staff </label>
              <div class = "col-sm-10">
                <input type = "radio" name = "m_staff" value = "True"> Oui </input>&nbsp
                <input type = "radio" name = "m_staff" value = "False" checked> Non </input>
              </div>
            </div>
			
			<!-- Zone à selection unique permettant de choisir la categorie socio-professionnel de l'utilisateur -->
            <div class = "form-group">
              <label class = "col-sm-2 control-label"> Cadre Socio-Professionnel </label>
              <div class = "col-sm-10">
                <select name = "csp" class = "form" id = "csp" required>
                  <option value = "agriculteur"> Agriculteur </option>
                  <option value = "artisans,comm,cent."> Artisans,comm,cent. </option>
                  <option value = "senior executives"> Cadres et professions intellectuels </option>
                  <option value = "cadres et professions intellectuels "> Chomage </option>
                  <option value = "employés "> Employés </option>
                  <option value = "ouvriers"> Ouvriers </option>
                  <option value = "profession intermédiaire"> Profession intermédiaire </option>
                  <option value = "retraités"> Retraités </option>
                  <option value = "autres"> Autres </option>
                </select>
              </div>
            </div>
			
			<!-- Bouton permettant de valider le formulaire et de rediriger vers la page de création du fichier json -->
            <div class = "form-group" align = "center">
              <div class = "col-sm-10">
                <input type = "submit">
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