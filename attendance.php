<?php
session_start();
include 'conn.php';
$mark=NULL;
$con = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($con);
	if (isset($_GET['id'])) {
		$_SESSION['id']=$_GET['id'];
	//echo $_SESSION['class_data'][$_GET['id']]['course_id'];
	$course_id=$_SESSION['class_data'][$_GET['id']]['course_id'];
	$_SESSION['course_id']=$course_id;
	echo "\n";
	//echo $_SESSION['class_data'][$_GET['id']]['course_name'];
	echo "\n";
	//$class_id=$_SESSION['class_data'][$_GET['id']]['class_id'];
	//echo $_SESSION['class_data'][$_GET['id']]['class_id'];
	$class_id=$_SESSION['class_data'][$_GET['id']]['class_id'];
	$_SESSION['class_id']=$class_id;
	echo "\n";
	$program= $_SESSION['class_data'][$_GET['id']]['program'];
	$_SESSION['program']=$program;
	echo "\n";
	$shift= $_SESSION['class_data'][$_GET['id']]['shift'];
	$_SESSION['shift']=$shift;
	echo "\n";
	$sec=$_SESSION['class_data'][$_GET['id']]['sec'];
	$_SESSION['sec']=$sec;
	//echo $_SESSION['class_data'][$_GET['id']]['sec'];
	//echo $_GET['id'];
	}
	else{
		$class_id=$_SESSION['class_id'];
		$sec=$_SESSION['sec'];
		$course_id=$_SESSION['course_id'];
	}
	
	
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
  
input:last-of-type {
     margin-bottom: 0px; 
}

input[type="text"] {
    width: 77px;
}
button {
  margin-left: 15px;
    margin-top: 25px;
}

a.red {
    display: block;
    padding: 20px;
    font-size: 24px;
    color: darkred;
}
body{
      background: #fcf386;
}
</style>
</head>

<body>
	<?php
	$selectSQL= "SELECT * FROM student_bsse_b15 WHERE class_id='$class_id' AND sec='$sec'  ORDER BY seat_no ASC";
	if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <form id="atten_list" action="post_attendance.php" method="post" id="marks-dist-form">
		<h1 style="padding:5px;"><?php echo $course_id; ?></h1>
		<table border="2" id="myTable">
  		<thead>
    	<tr style="background-color:#fff; color: #000;">
      <th style="padding:5px;">Seat.No</th>      	
      <?php
      for ($i=1;$i<=15;$i++)
      {
	     echo'<th style="padding:5px;">Day'.$i.'</th>';
      }
      ?>
      </tr>     
      </thead>
      <tbody>
      <?php   
      if( mysqli_num_rows( $selectRes )==0 ){
        	echo '<tr style="border:0; background-color:#fff; color: #000;"><td colspan="4">No Rows Returned</td></tr>';
      }else{
      	$id=0;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
        	$seat_no=$row['seat_no'];
          $name=$row['name'];
          $search="SELECT attendance FROM attendance WHERE (course_id_se='$course_id' OR course_id_cs='$course_id' OR course_id_mcs='$course_id') AND seat_no='$seat_no'";
            $res=mysqli_query($con,$search) or die(mysqli_error($con));
                if(mysqli_num_rows($res) > 0){
                    $out=mysqli_fetch_assoc($res);
                    $_SESSION['attendance']=$out['attendance'];

                }
                else{
                	$_SESSION['attendance']=NULL;
                }
				?>

      	<!-- <th style="padding:5px;">Seat.No</th>
      	
   <?php
for ($i=1;$i<=15;$i++)
{
	//echo'<td style="padding:5px;">Day'.$i.'</td>';
}

   ?>    -->	
    	<!-- </tr>  		
  		</thead>
  		<tbody> -->
  			<tr id="res_row">   
          <td><input type="text" name="seat_no[]" value="<?php echo $row['seat_no'] ?>" readonly></td>
          <td><?php echo $row['name']; ?></td>
          <?php
          if (isset($_SESSION['attendance'])) {
            $out= explode(',', $out['attendance']);
            //echo sizeof($out);
            for ($i=0;$i<sizeof($out);$i++){
               echo'<td style="padding:5px;"><input type="text" name="attendance['.$row['seat_no'].']['.$i.']" value="'.$out[$i].'"></td>';
            }
          }else{
            for ($i=1;$i<=15;$i++){
	             echo'<td style="padding:5px;"><input type="text" name="attendance['.$row['seat_no'].']['.$i.']"></td>';
            }
          }
          ?>
              <!-- <td><input type="text" name="std[]" value="<?php echo $row['name'] ?>" readonly></td>
              <td><input type="text" name="fname[]" value="<?php echo $row['fname'] ?>" readonly></td>
              <td><input type="text" name="sec[]" value="<?php echo $row['sec']; ?>" readonly></td> -->
              <!-- <td><input type="text" name="tmarks[]" value="100" readonly></td>
              <?php if($_SESSION['marks_obt']==NULL){ ?>
              <td><input id="marks_dictioanry" type="text" name="obt_marks{}"></td>
              <?php } elseif(isset($_SESSION['marks_obt'])){ ?>
              <td><input type="text" name="obt_marks[]" value="<?php echo $out['marks_obt'] ?>" readonly></td> -->
              <!-- <?php } ?> -->
          </tr>             
           <?php $id++;                        
        }
      }
    ?>
  	</tbody>
	</table>
</form>
<?php
  }
?>
  		
<!-- </table> -->
<button form="atten_list" method="post" name="upload_atten">Submit</button>
<button form="atten_list" method="post" name="upload_atten" id="save">Save</button>

<a class="red" href="instructor.php">Back To Dashboard</a>
</body>
</html>
