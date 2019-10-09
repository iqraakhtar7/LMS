<?php
session_start();

include 'conn.php';
$mark=NULL;
$teacher_id=$_SESSION['ins_id'];
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
  if(isset($_SESSION['sess_id'])){
    if($_SESSION['sess_id']!=$_SESSION['id']){
    header("Refresh: 0");
    }
  }
	
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	<title>Upload Result</title>

  <style type="text/css">
    
       a.red {
    display: block;
    padding: 20px;
    font-size: 24px;
    color: darkred;
}
body{
      background: #fcf386;
      padding-top: 25px;
      padding-left: 25px;
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
    <form action="marks_dist.php" method="post" id="marks-dist-form" class="form-inline">
          <div class="form-group mb-2 mr-sm-2" id="add-more0">
            <label for="dist-name0" class="control-label mb-2 mr-sm-2">Select Marks Category</label>
            <select name="dist_name0" type="text" class="form-control mb-2 mr-sm-2" id="dist-name0" required>
              <option value="">-----</option>
              <option value="assigment">Assignments</option>
              <option value="quiz">Quiz</option>
              <option value="lab">Lab </option>
              <option value="project">Project </option>
              <option value="attendence">Attendence </option>
              <option value="c_p">Class Performance/Participation </option>
              <option value="mid_term">Mid Term </option>
              <option value="finals" selected>Theory(Finals) </option>
              <option value="other">Other </option>
            </select>          
            <label for="dist-val0" class="control-label mb-2 mr-sm-2">Distribution</label>
            <input type="text" class="form-control dist-val mb-2 mr-sm-2" id="dist-val0" name="dist_val0" data-toggle="tooltip" data-placement="right">
            <input type="button" value="Remove" id="rem" name="rem" class="mb-2 mr-sm-2" 
    onclick="remFields(this.id);" style="display: none;" />            
          </div>
          <span id="writeroot"></span>          
        </form>

        <button type="button" class="btn btn-default"  id="add-more-btn" onclick="moreFields();">Add more</button>
        <button type="button" class="btn btn-primary" onclick="createColHeader();" name="assign">Update</button>
      
        
   <!--  STUDENT RESULT TABLE -->
    <form id="std_list" method="post" action="insert_res.php">
    <center>
	<table border="2" id="myTable">
  		<thead>
    	<tr style="background-color:#fff; color: #000;">
      	    <th style="padding:5px;" rowspan="2">Seat No</th>
            <th style="padding:5px;" rowspan="2">Name</th>
            <th style="padding:5px;" rowspan="2">Father's Name</th>
            <th style="padding:5px;" rowspan="2">Section</th>
            <th style="padding:5px;" rowspan="2">Total marks</th>
            <?php if(!isset($_SESSION['marks_obt'])):?>
            <th style="padding:5px;" id="MOspan" colspan="">Marks Obtained</th>
            </tr>
            <tr id="dynamic-header"></tr>
            </thead>
            <tbody>
            <?php endif;
            if(isset($_SESSION['marks_obt'])):?>
              <th style="padding:5px;" colspan="<?php echo $_SESSION['fld_size'];?>">Marks Obtained</th></tr>
            <?php endif;?>
          
                  	
    	
  		
    	<?php
      	if( mysqli_num_rows( $selectRes )==0 ){
        	echo '<tr style="border:0; background-color:#fff; color: #000;"><td colspan="4">No Rows Returned</td></tr>';
      	}
      	else{
          $_SESSION['num']=mysqli_num_rows( $selectRes );
      		$id=0;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
        	$seat_no=$row['seat_no'];
            $search="SELECT marks_obt FROM std_res WHERE (course_id_se='$course_id' OR course_id_cs='$course_id' OR course_id_mcs='$course_id') AND seat_no='$seat_no'";
            $res=mysqli_query($con,$search) or die(mysqli_error($con));
                if(mysqli_num_rows($res) > 0){
                    $out=mysqli_fetch_assoc($res);
                    $_SESSION['marks_obt']=$out['marks_obt'];
                    $_SESSION['sess_id']=$_SESSION['id'];
                    $marks_field=explode(',',$_SESSION['marks_obt']);
                    $_SESSION['fld_size']=sizeof($marks_field)-1;
                    echo "<tr>";
                    for ($i=0; $i <sizeof($marks_field)-1 ; $i++) { 
                      # code...
                      $marks_head=explode(':', $marks_field[$i]);
                      $_SESSION['marks_val'][$i]=$marks_head[1];
                      echo '<th>'.$marks_head[0].'</th>';
                    }
                    echo "</tr></thead><tbody>";
                }
                else{
                	$_SESSION['marks_obt']=NULL;
                  $_SESSION['sess_id']=$_SESSION['id'];
                }
            
          
				?>
           <tr id="res_row">   
              <td><input type="text" name="seat_no[]" value="<?php echo $row['seat_no'] ?>" readonly></td>
              <td><input type="text" name="std[]" value="<?php echo $row['name'] ?>" readonly></td>
              <td><input type="text" name="fname[]" value="<?php echo $row['fname'] ?>" readonly></td>
              <td><input type="text" name="sec[]" value="<?php echo $row['sec']; ?>" readonly></td>
              <td><input type="text" name="tmarks[]" value="100" readonly></td>
              <?php if($_SESSION['marks_obt']==NULL){ ?>
              <!-- <td><input id="marks_dictioanry" type="text" name="obt_marks{}"></td> -->
              <?php } elseif(isset($_SESSION['marks_obt'])){ 
                for ($i=0; $i <$_SESSION['fld_size'] ; $i++) { 
                      # code...
                      //$marks_head=explode(':', $marks_field[$i]);
                      //$_SESSION['marks_val'][$i]=$marks_head[1];
                    if (isset($_SESSION['marker'])) {
                      echo '<td><input type="text" name="tmarks[]" value="'.$_SESSION['marks_val'][$i].'"></td>';
                    }
                    else{
                      echo '<td>'.$_SESSION['marks_val'][$i].'</td>';}
                    
                    }

                              
               } ?>
          </tr>             
           <?php $id++;                        
        }
      }
    ?>
  	</tbody>
	</table></center></form>
<?php
  }

if(isset($_SESSION['marks_obt'])):?>
<button form="std_list" method="post" name="upload_res" id="save">Save</button>
<button  onclick="marked();" id="saved" method="post" >Submit</button>
<?php endif; if(!isset($_SESSION['marks_obt'])):?>
<button form="std_list" method="post" name="upload_res">Upload result</button><?php
endif;?>
<p><?php
	if (isset($_SESSION['message'])) {
		echo $_SESSION['message'];
    $_SESSION['message']=NULL;
	}
	?>
		
	</p>
  <?php
    $query="SELECT completed FROM teach_courses WHERE (course_id_se='$course_id' OR course_id_cs='$course_id' OR course_id_mcs='$course_id') AND teacher_id='$teacher_id' AND sec='$sec'" ;
    if( !( $marker = mysqli_query($con, $query ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
    }else{
    $marker = mysqli_fetch_assoc( $marker );
      if($marker['completed']==0){
      $_SESSION['marker']=NULL;
      
      }
       if($marker['completed']==1){
       $_SESSION['marker']='marked';
       echo "I am here in marjed";
       }
      //echo "<script>alert('$res[num]');</script>";
      //return $res['num'];
     }

     function myMarker($con){
      $course_id=$_SESSION['course_id'];
      $teacher_id=$_SESSION['ins_id'];
      $sec=$_SESSION['sec'];
      $mark_query="UPDATE teach_courses SET completed=1 WHERE (course_id_se='$course_id' OR course_id_cs='$course_id' OR course_id_mcs='$course_id') AND teacher_id='$teacher_id' AND sec='$sec'";

      if( !( $update = mysqli_query($con, $mark_query ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
    }else{
        return 'marked';
     }
     }

  ?>



<a class="red" href="instructor.php">Back To Dashboard</a>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- bootstrap.bundle.min.js / bootstrap.bundle.js
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
        <script type="text/javascript">
          var counter = 0;
          var buttoncount=0;
function moreFields() {
  buttoncount++;
  if (document.getElementById('rem')) {
  var remBtn=document.getElementById('rem').style.display="inline-block";
  }
  if(getselLen()<9){  
  counter++;
  var field=document.getElementsByClassName('form-group');
  var newFields = document.getElementById(field[0].id).cloneNode(true);
  newFields.id = 'add-more'+getselLen();
  var newField = newFields.childNodes;
  
  for (var i=0;i<newField.length;i++) {
    var theName = newField[i].name;
    var theID = newField[i].id;
    if (theName){
      newField[i].name = theName + getselLen();
      newField[i].id = theID + getselLen();
      if (newField[i].value !='Remove' ) {
        newField[i].value = '';
      }
    }
  }
  var insertHere = document.getElementById('writeroot');
  insertHere.parentNode.insertBefore(newFields,insertHere);
  window.onload = moreFields;
  resetIds();
  }else{
    var btn = document.getElementById('add-more-btn');
                btn.disabled=true;
  }

}

function getselLen(){
  var selLen= document.getElementsByTagName('select').length;
  return selLen;
}

function remFields(btn_id){
  
  document.getElementById(btn_id).parentNode.remove();
  if(document.getElementById('add-more-btn').disabled){
    document.getElementById('add-more-btn').disabled=false;
  }
  resetIds();
}
function resetIds(){
  getFields=document.getElementsByClassName('form-group');

  for (var i = getFields.length-1; i >=0 ; i--) {
    getFields[i].id='add-more'+i;
    getChildFields=getFields[i].childNodes;

    for (var j=0;j<getChildFields.length;j++) {
    var whole_name=getChildFields[j].name;
    var whole_id=getChildFields[j].id;

      if (whole_name){
        var theName=whole_name.split(/([0-9]+)/);
        var theID=whole_id.split(/([0-9]+)/);
        getChildFields[j].name = theName[0] + i;
        getChildFields[j].id = theID[0] + i;
      }
    }
  }
}

function createColHeader(){
  var head=document.getElementById('MOspan');
  head.colSpan=getselLen();  
  var res_tbl=document.getElementById('dynamic-header');
  var res_row=document.getElementById('res_row');
  
  for (var i = res_tbl.cells.length-1, j=res_row.cells.length-1; i >=0 ; i--,j--) {
    res_tbl.deleteCell(i);
    res_row.deleteCell(j);
  }

  var selectChoice=document.getElementsByTagName('select');
  
  for (var i = 0; i < getselLen(); i++) {
    var cell1 = res_tbl.insertCell(i);
    cell1.innerHTML=selectChoice[i].options[selectChoice[i].selectedIndex].text;
  }
  
  createResRow();
}
function createResRow(){
    var res_row=document.getElementById('res_row');
    var selectChoice=document.getElementsByTagName('select');

    for (var i = res_row.cells.length, j=0; i < res_row.cells.length+ getselLen() && j<getselLen(); i++,j++) {
      
      var element = document.createElement("input");      
        element.setAttribute("type", 'int');     
        //element.setAttribute("value", '');     
        element.setAttribute("name", selectChoice[j].options[selectChoice[j].selectedIndex].text+'[]'); 

      var cell=res_row.insertCell(i);
      cell.appendChild(element); 
    }
  }

function marked(){
/*btn=document.getElementById('save');
    btn.disabled=true;*/
  if ('<?php echo $_SESSION['marker'];?>'=='unmarked') {
    var out="<?php if(isset($_SESSION['marker'])){ echo myMarker($con);}?>";
    btn=document.getElementById('saved');

    btn.disabled=true;
  }
  else if('<?php echo $_SESSION['marker'];?>'=='marked'){
   btn=document.getElementById('saved');
    btn.disabled=true;
    
   //alert("I am here")
  }
}

  $(document).ready(function(){
    $(".dist-val").each(function(){
      if(+$(this.val)>100){
        $('.dist-val').tooltip({'trigger':'focus', 'title': 'Distribution must be in the range 0-100'},'toggle','focused');
      }
    });
    if ('<?php echo $_SESSION['marker'];?>'=='marked') {
      $('#saved').prop('disabled', true);
      $('#save').prop('value', 'Saved');
      $('#save').text('Saved');
    }
    if ('<?php echo $_SESSION['marker'];?>'=='unmarked') {
      //$('#saved').prop('disabled', true);
      $('#save').prop('value', 'Saved');
      $('#save').text('Saved');
    }
  });
$(document).on("change", ".dist-val", function() {
    var sum = 0;
    $(".dist-val").each(function(){
        sum += +$(this).val();
        if(sum>100){
          $('.dist-val').tooltip({'trigger':'focus', 'title': 'Distribution must be in the range 0-100'},'focused');
        }
        if(sum<=100){
          $('.dist-val').tooltip('hide');
        }
    });
    //$(".total").val(sum);
});

  </script>


</body>
</html>