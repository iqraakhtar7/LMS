<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dcs-ubit");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		.map-container{
			  
	overflow:hidden;
	padding-bottom:56.25%;
	position:relative;
	height:0;
}
.map-container iframe{
	left:0;
	
	top:0;
	height:100%;
	width:100%;
	position:absolute;
}
.footer_contact_item.sizelist{
    font-size: 21px;
}
.content {
	    margin-top: -14px;
    margin-left: 45px;
    display: inline-block;
}
.footer_contact_icon.spacing{
width: 32px;
    height: 0px;
}
.home.pp {
    width: 100%;
    height: 82vh;
}
.home_content.qq {
    position: absolute;
    left: 50%;
    bottom: 225px;
    }
	</style>
<title>Course - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<!-- <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css"> -->
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<img src="download1.png" alt="" class="img2">
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">home</a></li>
						
						<li class="main_nav_item"><a href="index.php#courses">courses</a></li>
						<li class="main_nav_item"><a href="index.php#events">events</a></li>
						<li class="main_nav_item"><a href="index.php#news">news</a></li>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			
			<span><li class="main_nav_item"><a href="index.html#login">login/signup</a></li></span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.html">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="#">Contact</a></li>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home pp">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images2/lib23.jpg)"></div>
		</div>
		<div class="home_content qq">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>

						<div class="contact_form_container">
							<form  method="post">
								<input id="contact_name" class="input_field contact_form_name" type="text" placeholder="Name" data-error="Name is required." name="sender_name" onkeyup='validateName()'>
								<span class='error-message' id='name-error'></span>
							
								<input id="contact_email" class="input_field contact_form_email" type="text" placeholder="E-mail"  data-error="Valid email is required." name="sender_email" onkeyup='validateEmail()'>

								<span class='error-message' id='email-error'></span>

								<textarea id="contact_message" class="text_field contact_form_message" name="sender_message" placeholder="Message" data-error="Please, write us a message." onkeyup='validateMessage()' ></textarea>
								<span class='error-message' id='message-error'></span>
								<!--<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" value="Submit" name="submit1">send message</button>-->
								<button id="contact_send_btn" type="submit" onclick=' return validateForm()' name="submit1" class="contact_send_btn trans_200">Submit</button>
        					<span class='error-message' id='submit-error'></span>
							</form>

<?php
if(isset($_POST["submit1"]))
{
    


if(!mysqli_query($link,"insert into contact_email values('','$_POST[sender_name]',
  '$_POST[sender_email]','$_POST[sender_message]')"));
{
  echo(mysqli_error($link));
  } 

mysqli_close($link);
}
?>    
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<!-- <div class="about_title">Connect Through</div>
						<p class="about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum. Etiam eu purus nec eros varius luctus. Praesent finibus risus facilisis ultricies. Etiam eu purus nec eros varius luctus.</p> -->

						<div class="contact_info">
							
								<div class="footer_contact_item sizelist">
									<div class="footer_contact_icon spacing">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									<div class="content">
									Department Of Computer Science -UBIT,

UoK, KARACHI-75270</div>
								</div>
							<div class="footer_contact_item sizelist">
								<div class="footer_contact_icon spacing">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
										<div class="content">
									Telephone: 99261300-06 Ext: 2462
								</div>
							
								<div class="footer_contact_item sizelist">
								<div class="footer_contact_icon spacing">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
										<div class="content">
									dcs@uok.edu.pk / info@uok.edu.pk 
								</div>
							</div>
						
						</div>
</div>
					</div>
				</div>

			</div>
      
          
			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
								<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14470.431827256507!2d67.1150291!3d24.9454221!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x396c11bf227c8d35!2sUBIT+-+Umaer+Basha+Institute+of+Information+Technology!5e0!3m2!1sen!2s!4v1562595543395!5m2!1sen!2s" frameborder="0" style="border:0" allowfullscreen></iframe>
  
</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<!-- <div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
	.				</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> -->

			<!-- Footer Content -->

	<footer class="footer">
		<div class="container">
			
			<!-- Newsletter -->

			<!-- <div class="newsletter">
				<div class="row">
					<div class="col">
						<div class="section_title text-center">
							<h1>Subscribe to newsletter</h1>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col text-center">
						<div class="newsletter_form_container mx-auto">
							<form action="post">
								<div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
									<input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
									<button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div> -->

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-4 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<img src="images/logo.png" alt="">
								<img src="download1.png" alt="" class="img2">
							</div>
						</div>

						<p class="footer_about_text">
								A quality e-learning management system where student after registration can login and view their course details, time table schedule, attendance summary and  results.</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-4 footer_col" style="padding-right: 100px;
    text-align: center;">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.php">Home</a></li>
								
								<li class="footer_list_item"><a href="index.php#courses">Courses</a></li>
								<li class="footer_list_item"><a href="index.php#news">News</a></li>
								<li class="footer_list_item"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
					</div>

				




					<div class="col-lg-4 footer_col">
						<div class="footer_column_title">Contact</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									DEPARTMENT OF COMPUTER SCIENCE - UBIT,<br>

UNIVERSITY OF KARACHI, KARACHI-75270
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Telephone: 99261300-06 Ext: 2462
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>dcs@uok.edu.pk / info@uok.edu.pk 
								</li>
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column  align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<!-- <div class="footer_social ml-sm-auto">
					<ul class="menu_social">
						<li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
					</ul>
				</div> -->
			</div>

		</div>
	</footer>
</div>

<script type="text/javascript">
	function validateName() {

  var name = document.getElementById('contact_name').value;

  if(name.length == 0) {

    producePrompt('Name is required', 'name-error' , 'red')
    return false;

  }

  if (!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)) {

    producePrompt('Enter a valid name','name-error', 'red');
    return false;

  }

  producePrompt('Valid', 'name-error', 'green');
  return true;

}


function validateEmail () {

  var email = document.getElementById('contact_email').value;

  if(email.length == 0) {

    producePrompt('Invalid Email','email-error', 'red');
    return false;

  }

  if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)) {

    producePrompt('Invalid Email', 'email-error', 'red');
    return false;

  }

  producePrompt('Valid', 'email-error', 'green');
  return true;

}

function validateMessage() {
  var message = document.getElementById('contact_message').value;
  var required = 2;
  var left = required - message.length;

  if (left > 0) {
    producePrompt(left + ' more characters required','message-error','red');
    return false;
  }

  producePrompt('Valid', 'message-error', 'green');
  return true;

}

function validateForm() {
  if (!validateName()  || !validateEmail() || !validateMessage()) {
    jsShow('submit-error');
    producePrompt('Please fix errors to submit.', 'submit-error', 'red');
    setTimeout(function(){jsHide('submit-error');}, 2000);
    return false;
  }
  else {
  	return true;

  }
}

function jsShow(id) {
  document.getElementById(id).style.display = 'block';
}

function jsHide(id) {
  document.getElementById(id).style.display = 'none';
}




function producePrompt(message, promptLocation, color) {

  document.getElementById(promptLocation).innerHTML = message;
  document.getElementById(promptLocation).style.color = color;


}




</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>