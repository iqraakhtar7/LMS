<?php
	session_start();
	$ins=$_SESSION['ins_id'];
	$course=$_SESSION['course_id'];
	$class_id=$_SESSION['class_id'];
		
	$con = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($con);
	var_dump($_POST);
	$seat_no=$_POST['seat_no'];
	$attendance_utft=$_POST['attendance'][$seat_no[0]];
	$seatno_1=$_POST['seat_no'][0];
	var_dump($_POST['attendance'][$seatno_1]);
	$attendance[] = null;
	$atten_string=NULL;
	for ($i=0; $i <sizeof($seat_no) ; $i++) {
		for ($j=1; $j<sizeof($attendance_utft) ; $j++) { 
		 	# code...
		 	if($_POST['attendance'][$seat_no[$i]][$j]==NULL){
		 	$atten_string.="A,";	
		 	}
		 	else{
		 	$atten_string.=	$_POST['attendance'][$seat_no[$i]][$j].',';
		 	}
		 }
		 $attendance[$i]=$atten_string;
		 echo "Attendence ". $i. " : ".$attendance[$i]."<br>";


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

 if ($class_grp=='SE') {
			$search= "SELECT * FROM attendance WHERE seat_no='$seat_no[$i]' AND course_id_se='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_attendance.php");
                }
                else{
				$selectSQL="INSERT into attendance(seat_no,instructor_id,course_id_se,attendance) VALUES('$seat_no[$i]','$ins','$course','$attendance[$i]')";
				}
			}
			elseif ($class_grp=='CS') {
			$search= "SELECT * FROM attendance WHERE seat_no='$seat_no[$i]' AND course_id_cs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_attendance.php");
                }
                else{
				$selectSQL="INSERT into attendance(seat_no,instructor_id,course_id_cs,attendance) VALUES('$seat_no[$i]','$ins','$course','$attendance[$i]')";
				}
			}
			elseif ($class_grp=='MCS') {
				$search= "SELECT * FROM ttendance WHERE seat_no='$seat_no[$i]' AND course_id_mcs='$course' AND instructor_id='$ins'";
				$result=mysqli_query($con,$search);
                if(mysqli_num_rows($result) > 0){
                    $message="Already Uploaded";
                    $_SESSION['message']=$message;
                    header("Location: upload_attendance.php");
                }
                else{
				$selectSQL="INSERT into attendance(seat_no,instructor_id,course_id_mcs,attendance) VALUES('$seat_no[$i]','$ins','$course','$attendance[$i]')";
				}
			}
	if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    		echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  			}else{
  					$message="Result Successfully Updated";
                    $_SESSION['message']=$message;
                    header("Location: upload_attendance.php");
}
		 $atten_string=NULL; 		
	}
	//echo "Attendence 1 : ".$attendance[0];
	//echo "<br>Attendence 2 : ".$attendance[1];
?>