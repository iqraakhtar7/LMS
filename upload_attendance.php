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
	$attendance=$_SESSION['class_data'][$_GET['id']]['attendance'];
	$_SESSION['attendance']=$attendance;
	echo "\n";
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
<html>
<head>
	<title></title>
  <style type="text/css">
    
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

<h1><?php echo $course_id; ?></h1>
   <form id="std_list" method="post" action="insert_res.php">
    <center>
	<table border="2" id="myTable">
  		<thead>
    	<tr style="background-color:#fff; color: #000;">
      	<th style="padding:5px;" rowspan="2">Seat No</th>
            <th style="padding:5px;" rowspan="2">Name</th>
            <th style="padding:5px;" rowspan="2">Father's Name</th>
            <th style="padding:5px;" rowspan="2">Section</th>
            <th style="padding:5px;" rowspan="2">Attendance</th>
           </tr>
            <tr id="dynamic-header"></tr>      	
    	</tr>
  		</thead>
  		<tbody>
    	<?php
      	if( mysqli_num_rows( $selectRes )==0 ){
        	echo '<tr style="border:0; background-color:#fff; color: #000;"><td colspan="4">No Rows Returned</td></tr>';
      	}
      	else{
      		$id=0;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
        	$seat_no=$row['seat_no'];
            $search="SELECT attendance FROM attendance WHERE (course_id_se='$course_id' OR course_id_cs='$course_id' OR course_id_mcs='$course_id') AND seat_no='$seat_no'";
           
            $res=mysqli_query($con,$search) or die(mysqli_error($con));
                if(mysqli_num_rows($res) > 0){
                    $out=mysqli_fetch_assoc($res);
                    $_SESSION['attendance']=$out['attendance'];
                    echo $out['attendance'];
                }
                else{
                	echo "query Failed";
                	$_SESSION['attendance']=NULL;
                }
            
          
				?>
           <tr id="res_row">   
              <td><input type="text" name="seat_no[]" value="<?php echo $row['seat_no'] ?>" readonly></td>
              <td><input type="text" name="std[]" value="<?php echo $row['name'] ?>" readonly></td>
              <td><input type="text" name="fname[]" value="<?php echo $row['fname'] ?>" readonly></td>
              <td><input type="text" name="sec[]" value="<?php echo $row['sec']; ?>" readonly></td>
           
               <td><input type="text" name="attendance[]" value="<?php echo $out['attendance']; ?>" readonly></td>


              <?php } ?>
          </tr>             
           <?php $id++;                        
        }
      }
    ?>
  	</tbody>
	</table></center></form>

  
<a class="red" href="instructor.php">Back To Dashboard</a>

</body>
</html>