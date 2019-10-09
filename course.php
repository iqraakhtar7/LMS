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
          <img src="images/download1.jpg" alt="" class="img2">
        </div>
      </div>

      <!-- Main Navigation -->
      <nav class="main_nav_container">
        <div class="main_nav">
          <ul class="main_nav_list">
            <li class="main_nav_item"><a href="index.php">home</a></li>
            
            <li class="main_nav_item"><a href="courses.php">courses</a></li>
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
      <h1>Courses</h1>
    </div>
  </div>

 <div class="InformationDiv1">

<h1>First Year Results</h1>


    <!-- VIEW RESULTS SECTION-->
  <?php
  
    $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $selectSQL="SELECT * FROM course_list_bsse ";
  # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($link, $selectSQL ) ) ){
 //   echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable">
      <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows( $selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
         $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];}
        
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>

</div>
<!--  -->
</div>
</div>
</body></html>