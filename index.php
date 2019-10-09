<?php
//include 'conn.php';
error_reporting(0);
        
        session_start();
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"dcs-ubit");
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<style type="text/css">
	.btn1 {
    text-shadow: 1px 1px 0 grey;
    font-size: 20px;
    margin-top: 23px;
   color: #2f752f;
    background-color: transparent;
  border-color: transparent;
   
}
.btn1:hover {
  outline-color: transparent;
   
    font-size: 21px;
    text-shadow: 1px 1px 0 red;
}
.btn1:visited {
  outline-color: transparent;
  
}
.events .page_section{
 animation-duration: 0.75s;
    transition-timing-function: ease-in;
    animation-fill-mode: both;
}
</style>
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
						
						<li class="main_nav_item"><a href="#courses">courses</a></li>
						<li class="main_nav_item"><a href="#events">events</a></li>
						<li class="main_nav_item"><a href="#news">news</a></li>
						<li class="main_nav_item"><a href="contact.php">contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			
			<span><li class="main_nav_item"><a href="#login">login/signup</a></li></span>
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
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="#">About us</a></li>
					<li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
					<li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
					<li class="menu_item menu_mm"><a href="news.html">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
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

	<div class="home">

		<!-- Hero Slider -->
		<div class="hero_slider_container">
			<div class="hero_slider owl-carousel">
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="/*background-image:url(images2/slider44.jpg)*/background-image:url(images/milestones_background.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">What is <span>UBIT-LMS</span> ?</h1>
							<p>A Learning Management System (LMS) is an online system or software which is used to plan, execute, and assess a specific learning process. In simple words, software used in eLearning programs and which helps in administration, tracking, and recording. 

							</p>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images2/Library4.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">More About  <span>UBIT-LMS</span> !</h1>
									<p>
								Learning Management Systems are used to maintain online collaboration between students, teachers and administration over the internet, making it easy to communicate each other according to their necessities. 

								
							</p>
						</div>
					</div>
				</div>
				
				<!-- Hero Slide -->
				<div class="hero_slide">
					<div class="hero_slide_background" style="background-image:url(images2/photomania4.jpg)"></div>
					<div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
						<div class="hero_slide_content text-center">
							<h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">More About  <span>UBIT-LMS</span> !</h1>
									<p>

								A quality e-learning management system where student after registration can login and view their course details, time table schedule, attendance summary, results and make an appointment with teachers.
							</p>
						</div>
					</div>
				</div>

			</div>

			<div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
			<div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
		</div>

	</div>

	<!-- <div class="hero_boxes">
		<div class="hero_boxes_inner">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/earth-globe.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Online Courses</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/books.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Library</h2>
								<a href="courses.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 hero_box_col">
						<div class="hero_box d-flex flex-row align-items-center justify-content-start">
							<img src="images/professor.svg" class="svg" alt="">
							<div class="hero_box_content">
								<h2 class="hero_box_title">Our Teachers</h2>
								<a href="teachers.html" class="hero_box_link">view more</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
 -->
	<!-- Popular -->

		<div class="services page_section" id="news">
		
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>LATEST NEWS</h1>
					</div>
				</div>
			</div>

			<div class="container">
			<div class="section-title text-center">
			
				
			</div>
			<div class="row">
				

			<?php
					 $sql = "SELECT * FROM news";
 					 $data = $link->query($sql);
 					 $counter=0;

					$query = "SELECT * FROM news  ORDER BY id  DESC LIMIT 0, 2";
            		$result = mysqli_query($link,$query);
           while($row=$data->fetch_assoc() ){
  if(mysqli_num_rows($result)>0) {
 //if($counter<=2){
  while ($row = mysqli_fetch_array($result)) {
  	

		echo	'<div class="col-xl-6">';
			echo		'<div class="blog-item">';
			echo		'<div class="blog-item">';
				echo		'<div class="blog-thumb set-bg" data-setbg="images2/news1.jpg" style="background-image: url(images2/news1.jpg);">';
				echo '</div>';
						echo '<div class="blog-content">';
							echo '<h4>' .$row["news_headline"];
							echo '</h4>';
							echo '<div class="blog-meta">';
								echo '<span><i class="fa fa-calendar-o"></i>' .$row["news_date"];
								echo '</span>';
								//echo '<span><i class="fa fa-user"></i> Owen Wilson</span>'
							echo '</div>';
							echo '<p style="color:grey; ">'.$row["news_desc"];
							echo '</p>';
						echo '</div>';
						echo '</div>';
						echo '</div>';
						echo '</div>';

						}
}

}
					
						
						
	
  ?>
					
		
		 </div>

		 
</div></div></div>

	<!-- Register -->

	<div class="register" id=login>

		<div class="container-fluid">
			
			<div class="row row-eq-height">
				<div class="col-lg-6 nopadding">
					
					<!-- Register -->

					<div class="register_section d-flex flex-column align-items-center justify-content-center">
						<div class="register_content text-center">
							<h1 class="register_title">Login As Student</h1>
						<form id="log_form" class="search_form" action="log_reg/std_log.php" method="post">
								<input  class="input_field " type="text" placeholder="Seat. No" required="required" data-error="Course name is required." name="seat_no">
								<input  class="input_field " type="password" placeholder="Password" name="pwd">
								
								<button id="student_login" type="submit" class="search_submit_button trans_200" name="commit" form="log_form" method="post">Login</button></form>
								<!-- <button class="btn1" data-toggle="modal" data-target="#myModal">
    Register as a Student</button> -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">
                   Registration for Students</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                               	<input  class="input_field " type="text" placeholder="Enrollement.No" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Full Name" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Seat.No" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Year" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Section" required="required" data-error="Course name is required.">
								<input  class="input_field " type="text" placeholder="Shift">
									<input  class="input_field " type="text" placeholder="Program" required="required" data-error="Course name is required.">
								
								<button id="student_login" type="submit" class="search_submit_button trans_200" value="Submit">Register Now</button>
                               
                             
                                </form>
                            </div>
                          </div>
                          
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
							
							
						</div>
					</div>

				</div>

				<div class="col-lg-6 nopadding">
					
					<!-- Search -->

					<div class="search_section d-flex flex-column align-items-center justify-content-center">
						<div class="search_background" style="background-image:url(images/search_background.jpg);"></div>
						<div class="search_content text-center">
							<h1 class="search_title">Login As Instructor</h1>
							<form id="inst_form" class="search_form" method="post" action="log_reg/ins_log.php">
								<input  class="input_field " type="text" placeholder="Intructor Id" required="required" data-error="Course name is required." name="ins_id">
								<input  class="input_field " type="password" placeholder="Password" name="ins_pwd">
							
								<button id="instructor_login" type="submit" class="search_submit_button trans_200" form="inst_form" method="post" name="ins_login">Login</button>
							</form>
<!-- 
								<button class="btn1" data-toggle="modal" data-target="#myModal1">
    Register as an Instructor</button> -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">
                   Registration for Instructors</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                               	<input  class="input_field " type="text" placeholder="Full Name" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Id.No" required="required" data-error="Course name is required.">
                               	<input  class="input_field " type="text" placeholder="Designation" required="required" data-error="Course name is required.">
                              
								<button id="student_login" type="submit" class="search_submit_button trans_200" value="Submit">Register Now</button>
                               
                                </form>
                            </div>
                          </div>
                          
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
               
            </div>
        </div>
    </div>
</div>
							
						</div> 
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Services -->
	<div class="popular page_section" id=courses>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Programs</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php?value=bscs">BSCS</a></div>
							<div class="card-text">Discipline: Computer Science</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							
								
							<div class="course_author_name"><a href="courses.php?value=bscs">View Course Details</a> </div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/course_2.jpg" alt="https://unsplash.com/@cikstefan">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php?value=bsse">BSSE</a></div>
							<div class="card-text">Discipline: Software Engineering</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							
								
							<div class="course_author_name"><a href="courses.php?value=bsse">View Course Details</a> </div>
							
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
					<img class="card-img-top" src="images/course_1.jpg" alt="https://unsplash.com/@kellybrito">
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.php?value=mcs">MCS</a></div>
						<div class="card-text">Discipline: Computer Science</div>
						</div>
						<div class="price_box d-flex flex-row align-items-center">
							
								
							<div class="course_author_name"><a href="courses.php?value=mcs">View Course Details</a> </div>
						
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>


	<!-- Testimonials -->

	<div class="testimonials page_section">
		<!-- <div class="testimonials_background" style="background-image:url(images/testimonials_background.jpg)"></div> -->
		<div class="testimonials_background_container prlx_parent">
			<div class="testimonials_background prlx" style="background-image:url(images2/graduation3.jpg)"></div>
		</div>
		<div class="container">

			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Purpose of UBIT-LMS</h1>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme testimonials_slider">
							
							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The main objective of Learning Management Systems is to enhance the learning process. A Learning Management System not only delivers content, but also handles registering courses, course administration, skill gap analysis, tracking, and reporting</p>
									
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The main objective of Learning Management Systems is to enhance the learning process. A Learning Management System not only delivers content, but also handles registering courses, course administration, skill gap analysis, tracking, and reporting</p>
									
								</div>
							</div>

							<!-- Testimonials Item -->
							<div class="owl-item">
								<div class="testimonials_item text-center">
									<div class="quote">“</div>
									<p class="testimonials_text">The main objective of Learning Management Systems is to enhance the learning process. A Learning Management System not only delivers content, but also handles registering courses, course administration, skill gap analysis, tracking, and reporting</p>
									
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events page_section" id="events">
		<div class="container">
			
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Upcoming Events</h1>
					</div>
				</div>
			</div>
			
			<div class="event_items">

				<!-- Event Item -->
				
				</div>

				<!-- Event Item -->
					<?php
					 $sql = "SELECT * FROM event_table ";
 					 $data = $link->query($sql);


					$query = "SELECT * FROM event_table ORDER BY id ASC ";
            		$result = mysqli_query($link,$query);
           while($row=$data->fetch_assoc()){
  if(mysqli_num_rows($result) > 0) {
 
  while ($row = mysqli_fetch_array($result)) {
  	
				echo '<div class="row event_item">';
            
				echo	'<div class="col">';
				echo		'<div class="row d-flex flex-row align-items-end">';

					echo		'<div class="col-lg-2 order-lg-1 order-2">';
							echo	'<div class="event_date d-flex flex-column align-items-center justify-content-center">';
									
									echo '<div  class="event_day ">'.$row["event_date"];
									echo "</div>";
									//<div class="event_day">07</div>
									//<div class="event_month">January</div>
									echo '<div  class="event_month">' .$row["event_month"];
									echo "</div>";
									
								echo "</div>";
							echo "</div>";

							echo '<div class="col-lg-6 order-lg-2 order-3">';
							echo	'<div class="event_content">';
									
									echo '<div class="event_name"><a href="#" class="trans_200">'.$row["event_name"];
									echo "</a>";
									echo "</div>";
									//<div class="event_name"><a class="trans_200" href="#">Student Graduation Ceremony</a></div>
									//<div class="event_location">Grand Central Park</div>
									echo '<div class="event_location">' .$row["event_loc"];
									echo "</div>";
									//<p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor.</p>
									echo '<p>' .$row["event_desc"].'</p>';
								

								echo "</div>";
							echo "</div>";

					
							?>	
							<div class="col-lg-4 order-lg-3 order-1">
								<div class="event_image">
							
							<img src="<?php echo $row['event_img'] ?>" alt="event image" width="400px" height="180px">;
						</div>
					</div>
							<?php
								
							
						echo '</div>'	;
					echo '</div>';
			echo '</div>';

	}
}
}		
		
				
	echo '</div>';
	echo '</div>';
	


?>



<div style="clear: both"></div>

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
								
								<li class="footer_list_item"><a href="#courses">Courses</a></li>
								<li class="footer_list_item"><a href="#news">News</a></li>
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

</div></div></div></div></div></div></div></div></div>
<script type="text/javascript">
	$('#myModal').modal('show');
	$('#myModal1').modal('show');
// www.jquery2dotnet.com
</script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>