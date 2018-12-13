<!DOCTYPE html>
<html lang="en">	

	<head>
		<meta charset="UTF-8">
		<title>Portfolio</title>

		<!-- Google materials -->

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>

	<!-- Site -->
	<body>
		
		<!-- hiden head -->
		
		<div class="hiden-head" id="head">
			
		</div>

		<!-- end hiden head -->

		<!-- header -->
		<?php 
			include("vues/header.php")
		?>
		<!-- end header -->

		<!-- banner -->
		<?php 
			include("vues/banner.php")
		?>
		<!-- end banner -->
		
		<!-- about -->
		<?php 
			include("vues/about.php")
		?>
		<!-- end about -->

		<!-- Masteries -->
		<?php 
			include("vues/Masteries.php")
		?>
		<!-- end Masteries -->

		<!-- portfolio -->
		<?php 
			include("vues/portfolio.php")
		?>
		<!-- end portfolio -->
		
		<!-- footer/contact -->
		<?php 
			include("vues/footer.php")
		?>
		<!-- end footer/contact -->

		<!-- Login Modal -->
						<div id="pageconnexion">
							<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
						    	  <div class="modal-dialog">
										<div class="loginmodal-container">
											<h1>Login to Your Account</h1><br>
										  <form>
											<input type="text" name="login" id="login" placeholder="Username">
											<input type="password" name="mdp" id="mdp" placeholder="Password">
											<div id="message"></div>
											<input type="submit" id="btnconnexion" name="login" class="login loginmodal-submit" value="Login">
										  </form>
										</div>
									</div>
						  	</div>
						</div>
		<!-- end Login Modal -->

		<!-- test -->

		<!-- end test -->
		
		<!-- test JQuery -->
		<span class="hello" id="hello"></span>

		<!-- lien JS -->
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/app.js"></script>
	</body>
</html>