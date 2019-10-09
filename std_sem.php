<?php
	include 'conn.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student-Results</title>
<style type="text/css">
  .bg-light {
    background-color: #ffb606 !important; 
}
nav.col-md-2.d-none.d-md-block.bg-light.sidebar {
   /* background-color: #ffb606 !important; */
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/dash.css">


    <!-- Custom styles for this template -->
    <link href="styles/dash.css" rel="stylesheet">
</head>
<body>

  <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Student Profile</a>
  
    <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="log_reg/end_session.php">Back to Home / Sign out</a>
    </li>
    </ul>
    </nav>

    <div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Program<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              <?php echo $_SESSION['username']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
             <!--Class Year -->
             <?php echo $_SESSION['seat_no']; ?>

            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
             
             <?php echo $_SESSION['sem']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
             <!--Section -->
             <?php echo $_SESSION['sec']; ?>
            </a>
          </li>
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="year_4.php">
              <span data-feather="file-text"></span>
              Fourth Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="year_3.php">
              <span data-feather="file-text"></span>
              Third Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="year_2.php">
              <span data-feather="file-text"></span>
             Second Year
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="year_1.php">
              <span data-feather="file-text"></span>
           First year
            </a>
          </li>
        </ul>
      </div>
    </nav>

   <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 qq" style="background-image: url(images/search_background.jpg);">
  <!--     <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Your Name</h1>
          </div>
       <div class="Information">
        <div class="academic">
          <h3>Academic Information</h2>
        </div>
        <div class="personal">
          <h3>Personal Information</h2>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      
    -->




    <!-- VIEW RESULTS SECTION-->
	<?php
	$seat_no=$_SESSION['seat_no'];
	$sem=$_SESSION['sem'];
	  #Prepare the SELECT Query
//  	$selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
  	$selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester<'$sem' ORDER BY course_list_bsse.semester DESC ";
 	# Execute the SELECT Query
     $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
   
  if( !( $selectRes = mysqli_query($link,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
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
      	if( mysqli_num_rows($selectRes )==0 ){
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
          $prevSem=$row['semester'];
        }
      }
    ?>
  	</tbody>
	</table>

 <?php
  }

?></main></div>
<!-- END VIEW RESULTS SECTION-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
$(document).ready(function() {
   var span = 1;
   var prevTD = "";
   var prevTDVal = "";
   $("#myTable tr td:first-child").each(function() { //for each first td in every tr
      var $this = $(this);
      if ($this.text() == prevTDVal) { // check value of previous td text
         span++;
         if (prevTD != "") {
            prevTD.attr("rowspan", span); // add attribute to previous td
            $this.remove(); // remove current td
         }
      } else {
         prevTD     = $this; // store current td 
         prevTDVal  = $this.text();
         span       = 1;
      }
   });
});</script>
</body>
</html>