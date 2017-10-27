	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/widgets.all.css">
		<link rel="stylesheet" type="text/css" href="css/app.css">
		<link rel="stylesheet" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/homestyle.css">

		<link href="boots/css/bootstrap.min.css" rel="stylesheet"/>
		<script src="boots/js/jquery-3.2.1.min.js"></script>
		<script src="boots/js/bootstrap.min.js"></script>

		<style type="text/css">
		html{
			font-size: 200%;
		}

		body{
			height: 300%;
		}
	</style>
</head>
<body >
	<div>
						<div id="wrapper" style="background-color: #314354;height: 10em;width: 100%">
							<div class="overlay"></div>

							<!-- Sidebar -->
							<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation" >
								<ul class="nav sidebar-nav">
									<li class="sidebar-brand">
										<a class="makelarge" href="#">
											Brand
										</a>
									</li>
									<li>
										<a class="makelarge" href="#"><h1>Home</h1></a>
									</li>
									<li>
										<a class="makelarge" href="#"><h1>About</h1></a>
									</li>
									<li>
										<a class="makelarge" href="#"><h1>Events</h1></a>
									</li>
									<li>
										<a class="makelarge" href="#"><h1>Team</h1></a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle makelarge" data-toggle="dropdown"><h1>Works </h1><span class="caret"></span></a>
										<ul class="dropdown-menu" role="menu">
											<li class="dropdown-header makelarge"><h1>Dropdown heading</h1></li>
											<li><a class="makelarge" href="#"><h6>Action</a></h6></li>
											<li><a class="makelarge" href="#"><h6>Another action</a></h6></li>

										</ul>
									</li>
									<li>
										<a class="makelarge" href="#"><h1>Service</h1></a>
									</li>
									<li>
										<a href="#">Contact</a>
									</li>
									<li>
										<a href="https://twitter.com/maridlcrmn">Follow me</a>
									</li>
								</ul>
							</nav>
							<!-- /#sidebar-wrapper -->
							
							<!-- Page Content -->
							<div id="page-content-wrapper">
								<button type="button" class="hamburger is-closed" data-toggle="offcanvas" style="height: 5em;font-weight: bolder;font-size: large;">
									<span class="hamb-top" style="background-color: white; width: 8em; height: 10px; "></span>
									<span class="hamb-middle" style="background-color: white; width: 8em;height: 10px;"></span>
									<span class="hamb-bottom" style="background-color: white; width: 8em;height: 10px;"></span>

								</div>
								<!-- /#page-content-wrapper -->
								
							</div>
							<!-- /#wrapper -->
						</div>

					
<div class="container-fluid">

	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>

	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>

	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>


	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>


	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>

	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>

	<div class="row" style="margin-bottom: 1em; background-color: blue;height: 15em;margin-top: 1em;">
		<div class="col-md-4 panel panel-primary">

			
		</div>
		
	</div>





<div style="position: absolute;width: 70em;margin-top: 1em;">
				<footer style="text-align: center;font-size: 3em;font-weight: bolder;background-color: #0EA8CC">Copyright &copy;2017 emmygozi.com</footer>

				<p style="text-align: center;font-size: 3em;font-weight: bolder;background-color: #100605"><a href="#" class="fa fa-facebook"></a>&nbsp;&nbsp;
				<a href="#" class="fa fa-twitter"></a>&nbsp;&nbsp;<a href="#" class="fa fa-instagram">&nbsp;&nbsp;
					<a href="#" class="fa fa-snapchat"></a>&nbsp;&nbsp;<a href="#" class="fa fa-youtube"></a>&nbsp;&nbsp;<a href="#" class="fa fa-android"></a>
				</p>
			</div>


</div>
<script type="text/javascript">
	


					$(document).ready(function () {
						var trigger = $('.hamburger'),
						overlay = $('.overlay'),
						isClosed = false;

						trigger.click(function () {
							hamburger_cross();      
						});

						function hamburger_cross() {

							if (isClosed == true) {          
								overlay.hide();
								trigger.removeClass('is-open');
								trigger.addClass('is-closed');
								isClosed = false;
							} else {   
								overlay.show();
								trigger.removeClass('is-closed');
								trigger.addClass('is-open');
								isClosed = true;
							}
						}

						$('[data-toggle="offcanvas"]').click(function () {
							$('#wrapper').toggleClass('toggled');
						});  
					});
</script>
</body>
</html>