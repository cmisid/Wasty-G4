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
                    <h3 class="page-header"><i class="fa fa-file-text-o"></i> Statistiques</h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="accueil.html">Home</a></li>
                     
                    </ol>
                </div>
            </div>
                <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Général chart
                          </header>
					<div id="chart_div" style="width: 100%; height: 500px;"></div>
					    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]})
      google.charts.setOnLoadCallback(drawChart)
	  // situation : à echanger, à vendre, à debarasser
	  var jeutest={objet:[
		{
			"categorie":"chaise",
			"nombre":18,
			"situation":"à échanger"
		},
		{
			"categorie":"chaise",
			"nombre":15,
			"situation":"à vendre"
		},
		{
			"categorie":"chaise",
			"nombre":8,
			"situation":"à débarasser"
		},		
		{
			"categorie":"table",
			"nombre":8,
			"situation":"à échanger"
		},	
		{
			"categorie":"table",
			"nombre":12,
			"situation":"à vendre"
		},
		{
			"categorie":"table",
			"nombre":3,
			"situation":"à débarasser"
		},
		{
			"categorie":"ordinateur",
			"nombre":6,
			"situation":"à échanger"
		},		

		{
			"categorie":"ordinateur",
			"nombre":16,
			"situation":"à vendre"
		},
		{
			"categorie":"ordinateur",
			"nombre":1,
			"situation":"à débarasser"
		}
	]}
	var donnee = new Array()
	donnee[0] = ['categorie']
	/*for(i = 1; i <= jeutest.objet.length; i++){		
		donnee[i] = [jeutest.objet[i-1].situation,jeutest.objet[i-1].nombre]
	}	*/
	j=1
	for(i=1;i<=jeutest.objet.length;i++){
		if(donnee[0].indexOf(jeutest.objet[i-1].categorie)==-1){
			donnee[0].push(jeutest.objet[i-1].categorie)
			
			situation_existante=false
			for(k = 1; k < j; k++){
				if(donnee[k][0] == jeutest.objet[i-1].situation){
					situation_existante=true
					donnee[k][donnee[0].indexOf(jeutest.objet[i-1].categorie)] = jeutest.objet[i-1].nombre
				}
			}
			if(!situation_existante){
				donnee[j] = new Array()
				donnee[j].unshift(jeutest.objet[i-1].situation)
				donnee[j][donnee[0].indexOf(jeutest.objet[i-1].categorie)] = jeutest.objet[i-1].nombre	
				j++

			}
		}
		else{
			situation_existante=false
			for(k = 1; k < j; k++){
				if(donnee[k][0] == jeutest.objet[i-1].situation){
					situation_existante=true
					donnee[k][donnee[0].indexOf(jeutest.objet[i-1].categorie)] = jeutest.objet[i-1].nombre
				}
			}
			if(!situation_existante){
				donnee[j] = new Array()
				donnee[j].unshift(jeutest.objet[i-1].situation)
				donnee[j][donnee[0].indexOf(jeutest.objet[i-1].categorie)] = jeutest.objet[i-1].nombre	
				j++
			}
		}
	}

	
      function drawChart() {
	  var data = google.visualization.arrayToDataTable(donnee);
      var options = {
        width: 600,
        height: 400,
        legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true,
      };

      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
      chart.draw(data, options);
      }
    </script>
                      </section>
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
