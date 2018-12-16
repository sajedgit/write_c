<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url();?>assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Write C Dashboard </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
	
    <link href="<?php echo base_url();?>assets/css/dataTables.bootstrap4.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url();?>assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Write C
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url("admin"); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url("summons_category"); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Sommons Category</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("summons_details"); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Summons Details</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("oath"); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Oath Details</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("arrest_complaint_category"); ?>">
                        <i class="pe-7s-user"></i>
                        <p>Arrest and Complaint Category</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("arrest_complaint_details"); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>Arrest and Complaint Details</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("radio_codes"); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Radio Codes</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("question_answer"); ?>">
                        <i class="pe-7s-news-paper"></i>
                        <p>DIR Question</p>
                    </a>
                </li>
              
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Summons</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url("admin"); ?>">Dashboard</a></li>
								<li class="divider"></li>
                                <li><a href="<?php echo site_url("summons_category"); ?>">Sommons Category</a></li>
                                <li><a href="<?php echo site_url("summons_details"); ?>">Summons Details</a></li>
                                <li><a href="<?php echo site_url("oath"); ?>">Oath Details</a></li>
                                <li><a href="<?php echo site_url("arrest_complaint_category"); ?>">Arrest and Complaint Category</a></li>
								<li><a href="<?php echo site_url("arrest_complaint_details"); ?>">Arrest and Complaint Details</a></li>
								<li><a href="<?php echo site_url("radio_codes"); ?>">Radio Codes</a></li>
								<li><a href="<?php echo site_url("question_answer"); ?>">DIR Question</a></li>
			
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
							 
                              <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url("admin"); ?>">Dashboard</a></li>
								<li class="divider"></li>
                                <li><a href="<?php echo site_url("summons_category"); ?>">Sommons Category</a></li>
                                <li><a href="<?php echo site_url("summons_details"); ?>">Summons Details</a></li>
                                <li><a href="<?php echo site_url("oath"); ?>">Oath Details</a></li>
								<li><a href="<?php echo site_url("arrest_complaint_category"); ?>">Arrest and Complaint Category</a></li>
								<li><a href="<?php echo site_url("arrest_complaint_details"); ?>">Arrest and Complaint Details</a></li>
								<li><a href="<?php echo site_url("radio_codes"); ?>">Radio Codes</a></li>
								<li><a href="<?php echo site_url("question_answer"); ?>">DIR Question</a></li>
                              
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
					
                        <div class="card">
                          <?php  echo $this->breadcrumbs->show();?>
                           
									<?php  $this->load->view($content);?>
								
                            
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>




        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="<?php echo site_url("admin"); ?>">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("summons_category"); ?>">
                                Sommons Category
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("summons_details"); ?>">
                                Summons Details
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo site_url("oath"); ?>">
                               Oath Details
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Write C</a>, made with love for a better web
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	
	
	
	<script src="<?php echo base_url();?>assets/js/jquery.dataTables.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap4.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>
	
								
<script>

$(document).ready(function() {
    $('#example').DataTable();
} );


$(document).ready(function(){
  $(".del").click(function(){
    if (!confirm("Do you want to delete")){
      return false;
    }
  });
});


</script>

</html>
