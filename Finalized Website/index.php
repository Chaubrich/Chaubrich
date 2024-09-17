<?php
include("functions.php");
include("navigation.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Connor's Homepage</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="assets/css/owl.carousel.css" rel="stylesheet">
	<link href="assets/css/owl.theme.default.min.css"  rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<style>
		.active {
			background-color: #29ca8e;
			color: #ffffff;
		}
	</style>
</head>
<body id="page-top">
	<div id="greetingDiv"></div>
		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li>
							<a class="page-scroll" href="#about">About</a>
						</li>
						<li>
							<a class="page-scroll" href="#services">Services</a>
						</li>
						<li>
							<a class="page-scroll" href="#portfolio">Portfolio</a>
						</li>
						<li>
							<a class="page-scroll" href="#team">Team</a>
						</li>
						<li>
							<a class="page-scroll" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
		<!-- Header -->
	
<?php
			if (!isset($_GET['page']))
				$page='home';
			else
				$page=$_GET['page'];
			switch($page){
				case "work":
					include("page.php");
					break;
				case "school":
					include("school.php");
					break;
				case "hobbies":
					include("hobbies.php");
					break;
				case "contact":
					include("contact.php");
					break;
				case "results":
					include("results.php");
					break;
				case "register":
					include("register.php");
					break;
				case "login":
					include("login.php");
					break;
				default:
					include("home.php");
					break;
			};
?>

		<!-- Bootstrap core JavaScript
			================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>
		<script src="js/theme-scripts.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
</html>
<script src="assets/js/add-content.js"></script>