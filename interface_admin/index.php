<!DOCTYPE html>
<html lang="en">
  <?php
    include('./php/checkAuth.php');
    ?>
  <head>
    <meta charset="utf-8">
   
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Administrateur - Tableau de bord</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
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
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Tableau de bord</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
                <li><i class="fa fa-laptop"></i>Tableau de bord</li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box blue-bg">
                <i class="fa fa-users"></i>
                <div class="count">6.674</div>
                <div class="title">Utilisateurs homme</div>
              </div>
              <!--/.info-box-->			
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box brown-bg">
                <i class="fa fa-users"></i>
                <div class="count">7.538</div>
                <div class="title">Utilisateurs femme</div>
              </div>
              <!--/.info-box-->			
            </div>
            <!--/.col-->	
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box dark-bg">
                <i class="fa fa-stack-overflow"></i>
                <div class="count">4.362</div>
                <div class="title">Annonces</div>
              </div>
              <!--/.info-box-->			
            </div>
            <!--/.col-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <div class="info-box green-bg">
                <i class="fa fa-cubes"></i>
                <div class="count">1.426</div>
                <div class="title">Catégories</div>
              </div>
              <!--/.info-box-->			
            </div>
            <!--/.col-->
          </div>
          <!--/.row-->
          <div class="row">
            <div class="col-lg-9 col-md-12">
            </div>
            <div class="col-md-3">
              <!-- List starts -->
              <ul class="today-datas">
                <!-- List #1 -->
                <li>
                  <!-- Graph -->
                  <div><span id="todayspark1" class="spark"></span></div>
                  <!-- Text -->
                  <div class="datas-text">11,500 visiteur/jour</div>
                </li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">12,000000 visiteur chaque Mois</div>
                </li>                                                                                                              
              </ul>
            </div>
          </div>
          <!-- Today status end -->
          <div class="row">
            <div class="col-lg-9 col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h2><i class="fa fa-flag-o red"></i><strong>Utilisateurs enregistrés</strong></h2>
                  <div class="panel-actions">
                    <a href="index.php#" class="btn-setting"><i class="fa fa-rotate-right"></i></a>
                    <a href="index.php#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
                    <a href="index.php#" class="btn-close"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <div class="panel-body">
                  <table class="table bootstrap-datatable countries">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Ville</th>
                        <th>Utilisateurs</th>
                        <th>Online</th>
                        <th>Performance</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td></td>
                        <td>Paris</td>
                        <td>2563</td>
                        <td>1025</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100" style="width: 27%">
                            </div>
                          </div>
                          <span class="sr-only">73%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Marseille</td>
                        <td>3652</td>
                        <td>2563</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%">
                            </div>
                          </div>
                          <span class="sr-only">57%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Lyon</td>
                        <td>562</td>
                        <td>452</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width: 93%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100" style="width: 7%">
                            </div>
                          </div>
                          <span class="sr-only">93%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Toulouse</td>
                        <td>1258</td>
                        <td>958</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Nantes</td>
                        <td>4856</td>
                        <td>3621</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Montpellier</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Rennes</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>   	
                        </td>
                      </tr>
                      <tr>
                        <td></td>
                        <td>Rouen</td>
                        <td>265</td>
                        <td>102</td>
                        <td>
                          <div class="progress thin">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            </div>
                          </div>
                          <span class="sr-only">20%</span>   	
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!--/col-->
            <div class="col-md-3">
              <div class="social-box facebook">
                <i class="fa fa-facebook"></i>
                <ul>
                  <li>
                    <strong>256k</strong>
                    <span>friends</span>
                  </li>
                  <li>
                    <strong>359</strong>
                    <span>feeds</span>
                  </li>
                </ul>
              </div>
              <!--/social-box-->
            </div>
            <div class="col-md-3">
              <div class="social-box google-plus">
                <i class="fa fa-google-plus"></i>
                <ul>
                  <li>
                    <strong>962</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>256</strong>
                    <span>circles</span>
                  </li>
                </ul>
              </div>
              <!--/social-box-->			
            </div>
            <!--/col-->
            <div class="col-md-3">
              <div class="social-box twitter">
                <i class="fa fa-twitter"></i>
                <ul>
                  <li>
                    <strong>1562k</strong>
                    <span>followers</span>
                  </li>
                  <li>
                    <strong>2562</strong>
                    <span>tweets</span>
                  </li>
                </ul>
              </div>
              <!--/social-box-->			
            </div>
            <!--/col-->
          </div>
          <!-- statics end -->
          </div><br><br>
          <div class="row">
            <div class="panel-body">
              <div class="padd">
              </div>
              <div class="widget-foot">
                <!-- Footer goes here -->
              </div>
            </div>
          </div>
          </div>
          </div> 
          <!-- project team & activity end -->
        </section>
      </section>
      <!--main content end-->
    </section>
    <!-- container section start -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
    <script src="assets/chart-master/Chart.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>	
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>	
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });
      
      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true
      
          });
      });
      
      //custom select box
      
      $(function(){
          $('select.styled').customSelect();
      });
      
      /* ---------- Map ---------- */
      $(function(){
      $('#map').vectorMap({
      map: 'world_mill_en',
      series: {
       regions: [{
         values: gdpData,
         scale: ['#000', '#000'],
         normalizeFunction: 'polynomial'
       }]
      },
      backgroundColor: '#eef3f7',
      onLabelShow: function(e, el, code){
       el.html(el.html()+' (GDP - '+gdpData[code]+')');
      }
      });
      });
      
      
      
    </script>
  </body>
</html>