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



	<div class="login-box" style="margin-bottom:100px" >   <!-- new modified log in box -->
        <img src="img/s.png" class="avatar">
		<h4>Log In Here..!!</h4>
        <form class="form-inline form-signin" align="center" autocomplete="off" action="" method="POST">
            <div>
            	<i class="fas fa-user  faa-ring animated"></i>
            	<input type="text" class="form-control" name="username" id="username" autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="Username"><br>
            </div>
            <div>
                <i class="fas fa-lock faa-flash animated"></i>
                <input type="password" class="form-control" name="password" id="password" autocomplete="off" autofocus value style="margin-bottom:5px" placeholder="password"><br>
                <input class="bt btn-large btn-primary" type="submit" name="save" id="save" value="Sign In">
            </div>
        </form>
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