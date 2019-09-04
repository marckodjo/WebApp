<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Ion.RangeSlider -->
    <link href="Assets/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="Assets/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
	
	<!-- DATATABLE CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="Assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Récupération</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>MENU</h3>
                <ul class="nav side-menu">
					<li>
						<a href="index.php"><i class="fa fa-eyedropper"></i> Récupérer les informations </span></a>
					</li>
					<li>
						<a href="display.php"><i class="fa fa-eye"></i> Afficher les informations </a>
					</li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
				<div class="nav toggle">
					<a id="menu_toggle"><i class="fa fa-bars"></i></a>
				</div>

				<ul class="nav navbar-nav navbar-right">
                

                </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
			<div class="">
				<div class="page-title">
					<div class="title_left">
						<h3>Affichage des données</h3>
					</div>

					<div class="title_right">
						
					</div>
				</div>

				<div class="clearfix"></div>



				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">

						<!-- form grid slider -->
						<div class="x_panel" style="">
						  <div class="x_title">
							<h2>Paramétrage</h2>
							<div class="clearfix"></div>
						  </div>
						  <div class="x_content">
							<div class="row grid_slider">
								<form class="form-horizontal form-label-left">
								
								  <div class="col-md-10 col-sm-12 col-xs-12">
									<p>Selectionner les à recolter</p>
									<label for="ri_range">Régiments :</label>
									<input type="text"  value="" name="ri_range" id="ri_range"/>
								  </div>
								
								  <div class="col-md-2 col-sm-12 col-xs-12 text-center">
									<br/><br/><br/>
									<button class="btn btn-lg btn-primary" id="display_info">Afficher</button>
								  </div>
								</form>
							</div>
							<div class="row grid_slider" id="getting_messages" style="padding:25px 15px; background: #e6e9ed; margin-top: 15px; display:none">
							</div>
						  </div>
						</div>
						<br />
						<br />
						<!-- /form grid slider -->

					</div>
					<div class="col-md-12 col-sm-12 col-xs-12">

						<!-- Resultat Table -->
						<div class="x_panel" style="">
							<div class="x_title">
								<h2>Résultats</h2>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<div class="row grid_slider" id="result_box"> 
								</div>
							</div>
						</div>
						<br />
						<br />
						<!-- /Resultat Table -->

					</div>
				</div>
				
			</div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
	
	  <div class="col-md-12 col-sm-12 col-xs-12" id="loader_box" style="position: absolute; top:-250px; display:none">
		<img src="Assets/img/loader.gif" alt="" style="z-index:1000">
	  </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bootstrap-daterangepicker
    <script src="../vendors/moment/min/moment.min.js"></script> -->
    <!-- Ion.RangeSlider -->
    <script src="Assets/js/ion.rangeSlider.min.js"></script>
	
	<!-- DATATABLE JS -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="Assets/js/custom_slider.js"></script>


  </body>
</html>