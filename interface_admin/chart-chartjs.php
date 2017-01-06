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

    <title>Charts | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
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
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.php" class="logo">Administrateur</a>
            <!--logo end-->

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
               <ul class="nav pull-right top-menu">
                    
                   
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="icon-envelope-l"></i>
                            <span class="badge bg-important">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 5 new messages</p>
                            </li>
                            
                          
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox notificatoin end -->
                    <!-- alert notification start-->
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">7</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">You have 4 new notifications</p>
                            </li>
                            
                        
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username">Jenifer Smith</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> My Inbox</a>
                            </li>
                           
                        
                            <li>
                                <a href="login.php"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                            
                        
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

           <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Tableau de bord</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Utilisateurs</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="ajout_user.php">Ajout utilisateurs</a></li>                          
                          <li><a class="" href="supp_user.php">Suppression utilisateurs</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="ville.php" class="">
                          <i class="icon_desktop"></i>
                          <span>Villes</span>
                          
                      </a>
                      
                  </li>
                 
                   <li class="sub-menu">
                      <a href="categories.php" class="">
                          <i class="icon_table"></i>
                          <span>Catégories</span>
                          
                      </a>
                    
                  </li>


                  <li>                     
                      <a class="" href="chart-chartjs.php">
                          <i class="icon_piechart"></i>
                          <span>Charts</span>
                          
                      </a>
                                         
                  </li>
                             
                 
                  
                  <li class="sub-menu">
                      <a href="login.php" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Page de login</span>
                         
                      </a>
                     
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->      
      <section id="main-content">
        <section class="wrapper">
		<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="icon_piechart"></i> Chart</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_piechart"></i>Chart</li>
						
					</ol>
				</div>
			</div>
            <div class="row">
              <!-- chart morris start -->
              <div class="col-lg-12">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>General Chart</Char>
                      </header>
                      <div class="panel-body">
                        <div class="tab-pane" id="chartjs">
                      <div class="row">
                          <!-- Line -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Line
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="line" height="300" width="450"></canvas>
                                  </div>
                              </section>
                          </div>                      
                          <!-- Bar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Bar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="bar" height="300" width="500"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row">
                          <!-- Radar -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Radar
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="radar" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Polar Area -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Polar Area
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="polarArea" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                      <div class="row">
                          
                          <!-- Pie -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Pie
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="pie" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                          <!-- Doughnut -->
                          <div class="col-lg-6">
                              <section class="panel">
                                  <header class="panel-heading">
                                      Doughnut
                                  </header>
                                  <div class="panel-body text-center">
                                      <canvas id="doughnut" height="300" width="400"></canvas>
                                  </div>
                              </section>
                          </div>
                      </div>
                  </div>
                      </div>
                      </div>
                    </section>
              </div>
              <!-- chart morris start -->
            </div>
      </section>
      <!--main content end-->
    </section>
    <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  </body>
</html>
