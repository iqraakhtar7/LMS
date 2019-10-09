<?php
include 'conn.php';
include 'gettingResults.php';

$con = mysqli_connect('localhost','root','','dcs-ubit');
	session_start();
	echo date("y")-4;
	var_dump($_POST);
	if(isset($_POST['assign'])){

    $teacher_id = $_POST['teacher-id'];
    $teacher_name = $_POST['teacher-name'];
    $prog = $_POST['program'];
    $shift = $_POST['shift'];
    $batch = $_POST['batch'];
    $sec = $_POST['section'];
    $course = $_POST['course_name'];
    
    echo sizeof($sec);
    $class_id=gettingClasses($prog,$shift,$batch);  
    $array=explode("_", $class_id);
    $class_grp=$array[1];
    switch ($class_grp) {
        case 'SE':
            $cs_id='';
            $mcs_id='';
            $se_id=$course;
            for ($i=0; $i < sizeof($sec) ; $i++) { 
                $sec_id=$sec[$i];
                echo $sec[$i]."\n";
                $query="SELECT * FROM teach_courses WHERE class_id='$class_id' AND sec='$sec_id' AND course_id_se='$se_id' ";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    $message=" Already Assigned";
                    $_SESSION['msg']=$message;
                    echo "<script>alert('Already Assigned');</script>";
                }
                else{
                    $query = "INSERT INTO teach_courses(teacher_id, class_id, sec, course_id_se) VALUES ('$teacher_id','$class_id','$sec_id','$se_id')";
                    $result = mysqli_query($con,$query) or die ("Verification error");
                    $message="Succssfully Assigned";
                    $_SESSION['msg']=$message;
                }
            }
           header("Location: assign_class.php");
            break;
        
        case 'CS':
            $cs_id=$course;
            $mcs_id='';
            $se_id='';
            //execute_query($se_id,$cs_id,$mcs_id);
            for ($i=0; $i < sizeof($sec) ; $i++) { 
            $sec_id=$sec[$i];
            echo $sec[$i]."\n";
            $query="SELECT * FROM teach_courses WHERE teacher_id='$teacher_id' AND class_id='$class_id' AND sec='$sec_id' AND course_id_cs='$cs_id' ";
                $result=mysqli_query($con,$query);
                if(mysqli_num_rows($result) > 0){
                    $message=" Already Assigned";
                    echo "<script>alert('Already Assigned');</script>";
                }
                else{
                    $query = "INSERT INTO teach_courses(teacher_id, class_id, sec, course_id_cs) VALUES ('$teacher_id','$class_id','$sec_id','$cs_id')";
                    $result = mysqli_query($con,$query) or die ("Verification error");
                }    
            }
            header("Location: assign_class.php");
            break;
        
        case 'MCS':
            $cs_id='';
            $mcs_id=$course;
            $se_id='';
            //execute_query($se_id,$cs_id,$mcs_id);
            for ($i=0; $i < sizeof($sec) ; $i++) { 
            $sec_id=$sec[$i];
            echo $sec[$i]."\n";
            $query="SELECT * FROM teach_courses WHERE teacher_id='$teacher_id' AND class_id='$class_id' AND sec='$sec_id' AND course_id_mcs='$mcs_id' ";
                $result=mysqli_query($con,$query);
                if(mysql_num_rows($result) > 0){
                    $message=" Already Assigned";
                    echo "<script>alert('Already Assigned');</script>";
                }
                else{
                    $query = "INSERT INTO teach_courses(teacher_id, class_id, sec, course_id_mcs) VALUES ('$teacher_id','$class_id','$sec_id','$mcs_id')";
                    $result = mysqli_query($con,$query) or die ("Verification error");
                }
            }
            header("Location: assign_class.php");
            break;
         
                
        default:
            # code...
            break;
    }
   }
   else{
    echo "<script>alert('Error!');</script>";

   }


?>