<?php
session_start();
    
    include 'conn.php';

    $teacher_id=$_SESSION['ins_id'];

    $con = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assigned Courses</title>
</head>
<body>
	<?php

	if(!isset($_SESSION['ins_id'])){
		header("Location: index.php");
	}
	$selectSQL="SELECT teach_courses.teacher_id, teach_courses.course_id_se, teach_courses.course_id_cs, teach_courses.course_id_mcs, teach_courses.class_id, teach_courses.sec,  class_key.program, class_key.shift, class_key.adm_year,
 	course_list_bsse.course_name AS course_name_se,course_list_bscs.course_name AS course_name_cs,course_list_mcs.course_name AS course_name_mcs 
		FROM teach_courses 
		LEFT JOIN class_key ON class_key.class_id=teach_courses.class_id
		LEFT JOIN course_list_bsse ON course_list_bsse.course_id=teach_courses.course_id_se
    LEFT JOIN course_list_bscs ON course_list_bscs.course_id=teach_courses.course_id_cs
    LEFT JOIN course_list_mcs ON course_list_mcs.course_id=teach_courses.course_id_mcs
    WHERE teacher_id='$teacher_id'
    ORDER BY class_key.adm_year DESC " ;
	


//	$selectSQL= "SELECT * FROM teach_courses WHERE teacher_id='$teacher_id'";
	if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <center>
	<table border="2" id="myTable">
  		<thead>
    	<tr style="background-color:#fff; color: #000;">
      	<th style="padding:5px;">Class ID</th>
      	<th style="padding:5px;">Program</th>
      	<th style="padding:5px;">Shift</th>
      	<th style="padding:5px;">Section</th>
      	<th style="padding:5px;">Course ID</th>
      	<th style="padding:5px;">Course Name</th>
      	
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
            
            
              if($row['course_name_se']!=NULL && $row['course_name_cs']==NULL && $row['course_name_mcs']==NULL)
                { $course_name=$row['course_name_se'];
                  $course_id=$row['course_id_se'];
                }
              elseif($row['course_name_se']==NULL && $row['course_name_cs']!=NULL && $row['course_name_mcs']==NULL)
                { $course_name=$row['course_name_cs'];
                  $course_id=$row['course_id_cs'];
                }
              elseif($row['course_name_se']==NULL && $row['course_name_cs']==NULL && $row['course_name_mcs']!=NULL)
                { $course_name=$row['course_name_mcs'];
                  $course_id=$row['course_id_mcs'];
                }
                

                $class = array ('class_id' => $row['class_id'] , 
                				'program' => $row['program'],
                				'shift' => $row['shift'],
                				'sec' => $row['sec'],
                				'course_id' => $course_id,
                				'course_name' => $course_name);

				$_SESSION['class_data'][] = $class;

				?>
              
              <td><a href="marks_dist.php?id=<?=$id?>"><?php echo $row['class_id'] ?></a></td>
              <td><a href="attendance.php?id=<?=$id?>"><?php echo $row['program'] ?></a></td>
              <td><a href="upload_task.php?id=<?=$id?>"><?php echo $row['shift'] ?></a></td>
              <td><a href="upload_task.php?id=<?=$id?>"><?php echo $row['sec'] ?></a></td>
              <td><a href="upload_task.php?id=<?=$id?>"><?php echo $course_id ?></a></td>
              <td><a href="upload_task.php?id=<?=$id?>"><?php echo $course_name ?></a></td></tr>             
           <?php $id++;                        
        }
      }
    ?>
  	</tbody>
	</table></center>
<?php
  }

?>

</body>
</html>   
