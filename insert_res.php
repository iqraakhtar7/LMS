


<?php
	session_start();
	$ins=$_SESSION['ins_id'];
	$course=$_SESSION['course_id'];
	$class_id=$_SESSION['class_id'];
		
	$con = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($con);
	 var_dump($_POST);
$array=explode("_", $class_id);
    $class_grp=$array[1];
    $se;$cs;$mcs;
	switch ($class_grp) {
		case 'SE':
			$se=$course;
			$cs=NULL;
			$mcs=NULL;
			break;
		
		case 'CS':
			$se=NULL;
			$cs=$course;
			$mcs=NULL;
			# code...
			break;
		case 'MCS':
			$se=NULL;
			$cs=NULL;
			$mcs=$course;
			
			# code...
			break;
		
		default:
			# code...
			break;
	}

if(isset($_POST['upload_res'])){
		
		$name=$_POST['std'];
		$seat_no=$_POST['seat_no'];
		$fname=$_POST['fname'];
		$sec=$_POST['sec'];
		$tmarks=$_POST['tmarks'];
		$marks_array[]=NULL;
		//$obt_marks=$_POST['obt_marks'];
		for ($i=0; $i <sizeof($name) ; $i++) {
		if(isset($_POST['Theory(Finals)'])){
			$finals='Theory(Finals):'.$_POST['Theory(Finals)'][$i];
			$marks_array[$i].=$finals.',';
		}
		if(isset($_POST['Assignments'])){
			$asmt='Assignments:'.$_POST['Assignments'][$i];
			$marks_array[$i].=$asmt.',';
		}
		if(isset($_POST['Quiz'])){
			$quiz='Quiz:'.$_POST['Quiz'][$i];
			$marks_array[$i].=$quiz.',';
		}
		if(isset($_POST['Lab'])){
			$lab='Lab:'.$_POST['Lab'][$i];
			$marks_array[$i].=$lab.',';
		}
		if(isset($_POST['Project'])){
			$proj='Project:'.$_POST['Project'][$i];
			$marks_array[$i].=$proj.',';
		}
		if(isset($_POST['Attendence'])){
			$attendence='Attendence:'.$_POST['Attendence'][$i];
			$marks_array[$i].=$attendence.',';
		}
		if(isset($_POST['Class Performance/Participation'])){
			$c_p='Class Performance/Participation:'.$_POST['Class Performance/Participation'][$i];
			$marks_array[$i].=$c_p.',';
		}
		if(isset($_POST['Mid Term'])){
			$mids='Mid Term:'.$_POST['Mid Term'][$i];
			$marks_array[$i].=$mids.',';
		}
		if(isset($_POST['Other'])){
			$other='Other:'.$_POST['Other'][$i];
			$marks_array[$i].=$other.',';
		}
			echo "<br>".$marks_array[$i];
		if ($class_grp=='SE') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_se='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_se,instructor_id,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$marks_array[$i]')";
				}
			}
			elseif ($class_grp=='CS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_cs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_cs,instructor_id,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$marks_array[$i]')";
				}
			}
			elseif ($class_grp=='MCS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_mcs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_mcs,instructor_id,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$marks_array[$i]')";
				}
			}
			if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    		echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  			}else{
  					$message="Result Successfully Updated";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
  			}
		}	
	}
		/*for ($i=0; $i <sizeof($name) ; $i++) { 
			if ($class_grp=='SE') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_se='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_se,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			elseif ($class_grp=='CS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_cs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_cs,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			elseif ($class_grp=='MCS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_mcs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_mcs,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			
			if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
  	$message="Result Successfully Updated";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");;
  }
		}*/
	//}
/*	if(isset($_POST['upload_res'])){
		
		$name=$_POST['std'];
		$seat_no=$_POST['seat_no'];
		$fname=$_POST['fname'];
		$sec=$_POST['sec'];
		$tmarks=$_POST['tmarks'];
		$obt_marks=$_POST['obt_marks'];

		for ($i=0; $i <sizeof($name) ; $i++) { 
			if ($class_grp=='SE') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_se='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_se,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			elseif ($class_grp=='CS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_cs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_cs,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			elseif ($class_grp=='MCS') {
				$search= "SELECT * FROM std_res WHERE seat_no='$seat_no[$i]' AND course_id_mcs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");
                }
                else{
				$selectSQL="INSERT into std_res(seat_no,course_id_mcs,instructor_id,total_marks,marks_obt) VALUES('$seat_no[$i]','$course','$ins','$tmarks[$i]','$obt_marks[$i]')";
				}
			}
			
			if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
  	$message="Result Successfully Updated";
                    $_SESSION['message']=$message;
                    header("Location: upload_task.php");;
  }
		}
	}*/

?>