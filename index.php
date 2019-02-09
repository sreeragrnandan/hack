<?php
        if(isset($_POST['save'])){
			include('config.php');
            if(!$conn)
            {
                die("connet faild".mysqli_connect_error());
			}
			echo "connection successfull";
			$at="";
            $a=$_POST["name"];
            $b=$_POST["batch"];
            $c=$_POST["phone"];
            $d=$_POST["branch"];
            $e=$_POST["np"];
            $f=$_POST["food"];
            $data="insert into participants values('$at','$a','$b','$c','$d','$e','$f')";
            $result=mysqli_query($conn,$data);
            if($result){
                $db_msg = " successfull";
            }
            else{
				$sql="select name from participants where phone = '$c'";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					$n=" Number already exist";
				}
                $db_msg = " failed".$n; //.mysqli_error($conn)
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SRDM COURSES</title>
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

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="effects.css" rel="stylesheet">
  <link href="css/demo.css" rel="stylesheet">
  <link href="css/base.css" rel="stylesheet">
  <link href="css/particles.css" rel="stylesheet">
  <link rel="stylesheet" href="css/anim.css">
  <link rel="stylesheet" href="css/magic.css">

</head>

<body>

    <?php
        include('include/navbar.php');
    ?>
                
  <!--==========================
    Hero Section
  ============================-->
  
    <section id="hero" class="wow fadeIn">
    <a class="link link--kukuri" href="#" data-letters="Lets Start a Ride" style="position:absolut;padding-left:30%">Lets Start a Ride</a>
        
    </section><!-- #hero -->
    

    
    <img src="img/my.png" style="opacity:0.5;position: absolute;left:13%;bottom:-100px;width: 1090px;height:100%;border-radius:360px" class="center">
    <div class="hover02 column">
        <figure>
            <img src="img/s.png" alt="logo" style="position: absolute;z-index: 100;left:36%;top:34%;width: 320px;height:100px;width:100px" class="ima">
        </figure>
    
    </div>
    <div class="talk-bubble tri-right round right-in" style="position: absolute;left:19%;top:193px;border-radius:20px">
        <div class="talktext">
            <p>Hai am</p><b>Jessi</b>
            <p>and, i'm here to guide you to the 
            various levels of coding world..!!</p>
        </div>
        
    </div>
    <div class="grid__item theme-1">
		<button class="particles-button">Lets Go..!!</button>
	</div>
    <h1 class="animated infinite bounce delay-2s">Example</h1>
    



 
 <?php
    include('include/footer.php');
?>
  

  



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

  <script>
      $(function() {
        var text = $(".text");
        $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 200) {
        text.removeClass("hidden");
        } else {
        text.addClass("hidden");
        }
        });
        });

    </script>
    <script src='js/anime.min.js'></script>
	    <script src='js/particles.js'></script>
        <script src='js/demo.js'></script>
        <script src='js/gulpfile.js'></script>
    <script>
    setInterval(function(){ 
	$('.grid__item theme-1').toggleClass('magictime boingInUp');
        }, 3000 );
    </script>

</body>
</html>
