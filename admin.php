<?php
    include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JSRDM COURSES</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="programming,online programming,online learning,online coding, coding" name="keywords">
  <meta content="Programming made simpler and efficient with real world examples which students from 5th can learn" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  
  <link href="lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

	<!-- Popular Courses -->

	
	<?php
		include('include/navbar.php');
	?>



	<img src="img/g.png" style="width: 20%;height: 40%;left: 47px;bottom: 103px;position: absolute;">
	<div id="">
		<div class="loginbox-v4 loginbox-v4--signup modal-content-wrapper js-signin-boxud-app-loader ud-angular--social-auth--app ud-app-loaded" data-module-id="social-auth" data-module-args="{&quot;customPopupIdentifier&quot;:&quot;&quot;,&quot;mode&quot;:&quot;SIGNUP&quot;}" data-purpose="sign-up-box" perimeter-x="" signin-form-mobile-fix="">
			<div class="ud-component--social-auth--auth-seen-by-user-tracker" ng-non-bindable="">
				<span style="font-size: 0px;"></span>
			</div>
			<div class=" loginbox-v4__header loginbox-v4__header--signup">
                Sign Up and Start Learning!
            </div>
			<div class="loginbox-v4__content">
                <form class="signin-form dj ng-pristine ng-valid" signin-form="" name="signup-form" id="signup-form" signin-box-class-name="js-signin-box" action="index.php" action-type="signup" method="post"> 
					<input type="hidden" name="csrfmiddlewaretoken" value="2lIVNZyo8TaJZBhu2U9RDgRyquXhmHiorNLoN7Q4H1cax3EBJiFCvcwLLqPegXkp" autocomplete="off"> 
					<div class="manage-fields-wrapper">
						<input type="hidden" name="locale" value="en_US" autocomplete="off"> 
						<div class="form-field-container  labeled " id="form-item-fullname"> 
							<label class="control-label " for="id_fullname">Name</label> 
							<div id="tooltip-reference-fullname" class="tooltip-reference pos-r "> 
								<input type="text" name="fullname" class="textinput textInput form-control"
								 data-purpose="fullname" required="" minlength="2" id="id_fullname" maxlength="64" placeholder="Full Name"> 
							</div>
						</div> 
						<div class="form-field-container  labeled ud-component--social-auth--django-email-field" id="form-item-email" ng-non-bindable="">
							<div>
								<input name="email" required="" maxlength="64" minlength="7" placeholder="Email" data-purpose="email" type="email" class="form-control" value="">
							</div>
						</div> 
						<div class="form-field-container  labeled " id="form-item-password"> 
							<label class="control-label " for="id_password">Password</label> 
							<div id="tooltip-reference-password" class="tooltip-reference pos-r "> 
								<input type="password" name="password" class="textinput textInput form-control" data-purpose="password" required="" minlength="6" id="id_password" maxlength="64" placeholder="Password"> 
							</div>
						</div> 
						<div class="form-field-container  labeled " id="form-item-subscribe_to_emails"> 
							<div id="tooltip-reference-subscribe_to_emails" class="tooltip-reference pos-r "> 
								<div class="checkbox"> 
									<label for="id_subscribe_to_emails"> 
										<input type="checkbox" name="subscribe_to_emails" id="id_subscribe_to_emails" data-purpose="subscribe-to-emails" checked="checked"> 
										<span class="checkbox-label">I’m in for emails with exciting discounts and personalized recommendations</span> 
									</label> 
								</div> 
							</div>
						</div> 
						<div class="form-field-container  labeled " id="form-item-signup"> 
							<label class="control-label " for="id_signup">If you are a real human, you do not need to fill this field</label>
							<div id="tooltip-reference-signup" class="tooltip-reference pos-r "> 
								 <input type="text" name="signup" id="id_signup" class="hidden textinput textInput form-control"> 
							</div>
						</div>
					</div>
					<div class="form-actions"> 
						<div class="submit-row"> 
							<input type="submit" name="submit" value="Sign Up" class="btn btn-primary " id="submit-id-submit" data-purpose="do-signup">
						</div>
					</div> 
				</form>
				<div class="loginbox-v4__secondary-text">
					By signing up, you agree to our 
					<a href="/terms/" target="_blank">Terms of Use</a> and <a href="/terms/privacy/" target="_blank">Privacy Policy</a>.
            	</div>
				<div class="loginbox-v4__separator">
				</div>
			</div>

			<div class="loginbox-v4__footer">
				Already have an account?
				<a class="sign-link" href=login.php data-purpose="login-link-signup-popup">
					Log In
				</a>
			</div>
		</div>
	</div>

	

	<?php
    	include('include/footer.php');
	?>
	
	
</body>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/modal-video/js/modal-video.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</html>