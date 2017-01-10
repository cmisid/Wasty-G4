<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php
		include('./php/checkAuth.php');
	?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

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

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
	 
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
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Ajout utilisateurs</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						
					</ol>
				</div>
			</div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" method="post" action="donneesUtilisateurs.php">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Nom</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="nom" id="nom">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Prenom</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name ="prenom" id="prenom">
                                      </div>
                                  </div>
								  <div class="form-group">
                                      <label class="col-sm-2 control-label">Adresse Email</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="email" id="email">
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label class="col-sm-2 control-label">Password</label>
                                      <div class="col-sm-10">
                                          <input type="text"  class="form-control" name="mdp" id="mdp">
                                      </div>
                                  </div>
								  
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Date de naissance</label>
                                      <div class="col-sm-10">
                                          <input type="date" name="dateN">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Sexe</label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="gender" value="male"> Homme </input>&nbsp
										  <input type="radio" name="gender" value="female"> Femme </input>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Téléphone</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="telephone">
                                      </div>
                                  </div>
                                  <!--<div class="form-group">
                                      <label class="col-sm-2 control-label">Photo</label>
                                      <div class="col-sm-10">
                                           <input type="file" name="photo">
										  
                                      </div>
                                  </div>-->
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Niveau de permission</label>
                                      <div class="col-sm-10">
										<input type="checkbox" name="niv_permission[]" id="perm_1" value="1"/> <label for="perm_1">1</label>&nbsp
										<input type="checkbox" name="niv_permission[]" id="perm_2" value="2"/> <label for="perm_2">2</label>&nbsp
										<input type="checkbox" name="niv_permission[]" id="perm_3" value="3"/> <label for="perm_3">3</label>&nbsp
										<input type="checkbox" name="niv_permission[]" id="perm_4" value="4"/> <label for="perm_4">4</label>&nbsp
										<input type="checkbox" name="niv_permission[]" id="perm_5" value="5"/> <label for="perm_5">5</label>&nbsp
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Superviseur</label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="Supervisor" value="True"> Oui </input>&nbsp
										  <input type="radio" name="Supervisor" value="False"> Non </input>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Membre du staff</label>
                                      <div class="col-sm-10">
                                          <input type="radio" name="m_staff" value="True"> Oui </input>&nbsp
										  <input type="radio" name="m_staff" value="False"> Non </input>
                                      </div>
                                  </div>
								   <div class="form-group">
                                      <label class="col-sm-2 control-label">Cadre Socio-Professionnel</label>
                                      <div class="col-sm-10">
									  <select name="csp" class="form" id="csp"> 
										   <option value="agriculteur">agriculteur</option>
										   <option value="artisans">artisans,comm,cent. </option>
										   <option value="cadres et professions intellectuels">cadres et professions intellectuels </option>
										   <option value="chomage">chomage </option>
										   <option value="employés">employés </option>
										   <option value="ouvriers">ouvriers</option>
										   <option value="profession intermédiaire">profession intermédiaire </option>
										   <option value="retraités">retraités </option> 
										   <option value="autres">autres </option>
									  </select>
                                      </div>
                                  </div>
								  <div class="form-group" align="center">
                                      <div class="col-sm-10">
										<input type="submit">
                                      </div>
								  </div>
                              </form>
							  
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
