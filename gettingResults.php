<?php 
	include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');
	
  function countInstructors($teacher_id){

    $con = mysqli_connect('localhost','root','','dcs-ubit');

		$selectSQL="SELECT COUNT(*) AS num FROM teach_courses WHERE teacher_id='$teacher_id'";
    if( !( $selectRes = mysqli_query( $con,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno($con).': '.mysql_error($con);
    }else{
  	$res = mysqli_fetch_assoc( $selectRes );
  		//echo "<script>alert('$res[num]');</script>";
  		return $res['num'];
	   }
  }

  function fetch_courses($group,$sem){

    $con = mysqli_connect('localhost','root','','dcs-ubit');
    switch ($group) {
      case 'BSSE':
        # code...
        $query="SELECT course_id,course_name FROM course_list_bsse WHERE semester='$sem'";
        $result = mysqli_query($con,$query) or die ("Verification error");
        while($row = mysqli_fetch_array($result)){
          $array[]=$row;
        }

        return $array;
        break;

      case 'BSCS':
        # code...
      $query="SELECT course_id,course_name FROM course_list_bscs WHERE semester='$sem'";
        $result = mysqli_query($con,$query) or die ("Verification error");
        while($row = mysqli_fetch_array($result)){
          $array[]=$row;
        }
        return $array;
        break;  
      
      case 'MCS':
        # code...
      $query="SELECT course_id,course_name FROM course_list_mcs WHERE semester='$sem'";
        $result = mysqli_query($con,$query) or die ("Verification error");
        while($row = mysqli_fetch_array($result)){
          $array[]=$row;
        }
        return $array;
        break;

      default:
        # code...
        break;
    }
  }

  function gettingClasses($group,$shift,$year){
    $con = mysqli_connect('localhost','root','','dcs-ubit');
    $currentYear=date("Y");
    $batchYear=$currentYear-$year;

    $query="SELECT class_id FROM class_key WHERE shift='$shift' AND program='$group' AND adm_year='$batchYear'";

    $result = mysqli_query($con,$query) or die ("Verification error");
   $array = mysqli_fetch_array($result);

    return $array['class_id'];

  }

?>