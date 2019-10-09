<?php
session_start();
    
    include 'conn.php';
    include 'gettingResults.php';
    $con = mysqli_connect('localhost','root','','dcs-ubit');
    
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
   <link href="bs/css/bootstrap.min.css" rel="stylesheet">

	<title></title>
  <style type="text/css">
    table{
margin-top: 10px;
      text-align: center;
      border:2px solid grey;

    }
    th{
      padding: 15px;
      color:white;
      font-size: 18px;
     background-color: black;
    }
    td{
      font-size: 16px;
      padding: 5px;
    }
  </style>
</head>
<body>
  <!---ASSIGN CLASS SECTION-->
	<?php
	
	$selectSQL="SELECT teach_courses.teacher_id, teach_courses.course_id_se, teach_courses.course_id_cs, teach_courses.course_id_mcs, teach_courses.class_id, teach_courses.sec,
    instructor_list.instructor_id, instructor_list.instructor_name, instructor_list.instructor_init,   
    course_list_bsse.course_name AS course_name_se,course_list_bscs.course_name AS course_name_cs,course_list_mcs.course_name AS course_name_mcs 
		FROM teach_courses 
		RIGHT JOIN instructor_list ON instructor_list.instructor_id=teach_courses.teacher_id
		LEFT JOIN course_list_bsse ON course_list_bsse.course_id=teach_courses.course_id_se
    LEFT JOIN course_list_bscs ON course_list_bscs.course_id=teach_courses.course_id_cs
    LEFT JOIN course_list_mcs ON course_list_mcs.course_id=teach_courses.course_id_mcs
    ORDER BY instructor_list.instructor_id" ;
		
	# Execute the SELECT Query
  if( !( $selectRes = mysqli_query($con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <center>
	<table border="2" id="myTable">
  		<thead>
    	<tr>
      	<th rowspan="2" style="text-align: center;">Instructor ID</th>
      	<th rowspan="2" style="text-align: center;">Instructor Name</th>
      	<th rowspan="2" style="text-align: center;">Instructor Initial</th>
      	<th colspan="5" style="text-align: center;">Assigned Classes</th>
      	<th rowspan="2" style="text-align: center;">Operations</th>
    	</tr>
    	<tr>
    	<th>Class Id</th>
      <th>Program</th>	
    	<th>Course Id</th>
    	<th>Course Name</th>
      <th>Section</th>
    	</tr>
  		</thead>
  		<tbody>
    	<?php
      	if( mysqli_num_rows( $selectRes )==0 ){
        	echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      	}
      	else{      		
        $ins=NULL; $indicator=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          $insCount=countInstructors($row['instructor_id']);
         
         if($insCount==0){
          $insCount=1;
         }
            if ($ins!=$row['instructor_id']) {
            echo "<tr><td rowspan=\"$insCount\">{$row['instructor_id']}</td><td rowspan=\" $insCount\">{$row['instructor_name']}</td><td rowspan=\" $insCount\">{$row['instructor_init']}</td>";
                  $ins=$row['instructor_id'];
            }        	
            
          	if($row['class_id']==NULL) {              
          		echo "<td colspan=\"5\">No classes assigned yet.</td>";          		
          	}
            elseif ($row['class_id']!=NULL) { 
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

                $array=explode("_", $row['class_id']);
                $class_grp=$array[1];
                ?>

              <td><?php echo $row['class_id'] ?></td>
              <td><?php echo $class_grp ?></td>
              <td><?php echo $course_id ?></td>
              <td><?php echo $course_name ?></td>  
              <td><?php echo $row['sec'] ?></td>             
           <?php }
           
            if($indicator!=$row['instructor_id']){            
            echo "<td rowspan=\"$insCount\"><button type=\"button\" class=\"btn btn-default\"  data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever='{\"id\": \"$row[instructor_id]\", \"name\" : \"$row[instructor_name]\"}'>Assign Classes</button></td></tr>"; 
            $indicator=$row['instructor_id'];
          }
          elseif($indicator==$row['instructor_id']){           
              echo "</tr>";           
          }
        }
      }
    ?>
  	</tbody>
	</table>
</center>
 <?php
  }
	?>

<!--Assign Classes Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form action="add_class.php" method="post" id="assign-class-form">
          <div class="form-group">
            <label for="recipient-id" class="control-label">Teacher ID</label>
            <input type="text" class="form-control" id="recipient-id" name="teacher-id" readonly>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Teacher Name</label>
            <input type="text" class="form-control" id="recipient-name" name="teacher-name" readonly>
          </div>
          <div class="form-group">
            <label for="program-name" class="control-label">Select Program</label>
            <select name="program" type="text" class="form-control" id="program-name" required>
              <option value="">-----</option>
              <option value="BSCS">BSCS</option>
              <option value="BSSE">BSSE</option>
              <option value="MCS">MCS</option>
            </select>
          </div>
          <div class="form-group">
            <label for="shift" class="control-label">Select Shift</label>
            <select name="shift" type="text" class="form-control" id="shift" required>
              <option value="">-----</option>
              <option value="morning">Morning</option>
              <option value="evening">Evening</option>
            </select>
          </div>
          <div class="form-group">
            <label for="batch" class="control-label">Select year</label>
            <select name="batch" type="text" class="form-control" id="batch" required>
              <option value="">-----</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div class="form-group">
            <label for="sem" class="control-label">Select semester</label>
            <select name="sem" type="text" class="form-control" id="sem" required>
              <option value="">-----</option>
              <option value="j-m">Jan-May</option>
              <option value="a-d">Aug-Dec</option>
            </select>
          </div>
          <div class="form-group" required>
            <label for="sec" class="control-label">Select Section</label><br>
            <input type="checkbox" name="section[]"  value="A" checked> A <br>
            <input type="checkbox" name="section[]"  value="B" > B <br>
          </div>
          <div class="form-group">
            <label for="course-name" class="control-label">Select Course</label>
            <select name="course_name" type="text" class="form-control" id="course-name" disabled required>
              <option value="">-----</option>
              
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" form="assign-class-form" method="post" name="assign">Assign</button>
      </div>
    </div>
  </div>
</div>
<h3><?php if(isset($_SESSION['msg']))
{
  echo $_SESSION['msg'];
  $_SESSION['msg']=NULL;

}
?></h3>
<br><br>
<a href="admin.php" style="font-size: 24px; color: red; margin:15px;">Back To Admin Panel</a>
	<!---ASSIGN CLASS SECTION THE END-->

	     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script></body>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script type="text/javascript">

      $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var id = button.data('whatever')
          console.log(id.name);
          console.log(id.id);
 
          var modal = $(this)
          modal.find('.modal-title').text('Assign class to ' + id.name)
          modal.find('.modal-body input#recipient-name').val(id.name)
          modal.find('.modal-body input#recipient-id').val(id.id)
      })
      
      var prog,year,c_sem;
      $('#program-name').on('change',function() {
         prog = $(this).children("option:selected").val();
         if(prog=='MCS'){
          $("#batch option[value='3']").remove();
          $("#batch option[value='4']").remove();
        }
         if($("#course-name").prop('disabled', false)){
          $('#course-name').empty();
          $('#course-name').append(new Option('-----', ''));
          $("#course-name").val('').prop('selected', true);
          $("#course-name").prop('disabled', true);
          $("#batch").val('').prop('selected', true);
          $("#sem").val('').prop('selected', true);
          $("#course-name").val('').prop('selected', true);
         }
       
      });
      $('#batch').on('change',function() {

         year = $(this).children("option:selected").val();
         if($("#course-name").prop('disabled', false)){
          $('#course-name').empty();
          $('#course-name').append(new Option('-----', ''));
          $("#course-name").val('').prop('selected', true);
          $("#course-name").prop('disabled', true);
          $("#sem").val('').prop('selected', true);
          $("#course-name").val('').prop('selected', true);
         }
      
      });
      $('#sem').on('change',function() {
         sem = $(this).children("option:selected").val();
         if($("#course-name").prop('disabled', false)){
          $('#course-name').empty();
          $('#course-name').append(new Option('-----', ''));
          $("#course-name").val('').prop('selected', true);
          if(sem=='' && prog=='' && year==''){
          $("#course-name").prop('disabled', true);
          }
         }
      if(sem!='' && year!=''){
        if(sem=='j-m'){
            switch(year){
                case '1' :
                    c_sem=1;
                    break;
                case '2' :
                    c_sem=3;
                    break;    
                case '3' :
                    c_sem=5;
                    break;
                case '4' :
                    c_sem=7;
                    break;    
            }
        }
        else if(sem=='a-d'){
            switch(year){
                case '1' :
                    c_sem=2;
                    break;
                case '2' :
                    c_sem=4;
                    break;    
                case '3' :
                    c_sem=6;
                    break;
                case '4' :
                    c_sem=8;
                    break;    
            }
        }
        ajax_call(prog,c_sem);
    
         }
       
      });
      
    function ajax_call(prog,c_sem){
      var args={'key1':prog, 'key2' : c_sem};
       
           $.ajax({
              type: "POST",
              url: 'modal_update.php',
              dataType: "json",
              data: {"functionname": 'fetch_courses', "arguments": [prog,c_sem]},

              success: function (obj, textstatus) {
                  if( !('error' in obj) ) {
                      yourVariable = obj.result;
                      var things={};
                      $("#course-name").prop('disabled', false);
                     // alert(JSON.stringify(yourVariable));
                    
                      for (var i = 0; i < Object.keys(yourVariable).length; i++) {
                      
                        things[yourVariable[i].course_id]=yourVariable[i].course_name;
                      }
                      
                      
                      $.each(things, function (index, value) {
                        $('#course-name').append($('<option/>', { 
                          value: index,
                          text : value 
                        }));
                      });  
                  }
                  else {
                      console.log(obj.error);
                  }
              },
              error: function (req, status, err) {
                  console.log('Something went wrong', status, err);
              }
          });
    }
     
</script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="bs/js/bootstrap.min.js"></script></body>
   <!-- <script type="text/javascript" src="custom.js"></script>-->
</body>
</html>