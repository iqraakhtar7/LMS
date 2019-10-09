<?php

session_start();
include 'conn.php';

$link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
$ins_id=$_SESSION['ins_id'];

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
<html>
<head>
	<title>Marks Distribution</title>
</head>
<body>
	<form action="marks_dist.php" method="post" id="marks-dist-form">
          <div class="form-group" id="add-more0">
            <label for="dist-name0" class="control-label">Select Marks Category</label>
            <select name="dist_name0" type="text" class="form-control" id="dist-name0" required>
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
            <label for="dist-val0" class="control-label">Distribution</label>
            <input type="text" class="form-control" id="dist-val0" name="dist_val0">
            <input type="button" value="Remove review" id="rem"
		onclick="remFields(this.id);" style="display: none;" />            
          </div>
          <span id="writeroot"></span>          
        </form>

        <button type="button" class="btn btn-default"  id="add-more-btn" onclick="moreFields();">Add more</button>
        <button type="button" class="btn btn-primary" onclick="createColHeader();" name="assign">Update</button>
        <button type="button" class="btn btn-default" onclick="getselLen();"> Get Length</button>
        
        <table id="res-table" border="2">
        	<thead><tr>
        		<th style="padding:5px;" rowspan="2">Seat No</th>
      			<th style="padding:5px;" rowspan="2">Name</th>
      			<th style="padding:5px;" rowspan="2">Father's Name</th>
      			<th style="padding:5px;" rowspan="2">Section</th>
      			<th style="padding:5px;" rowspan="2">Total marks</th>
      			<th style="padding:5px;" id="MOspan" colspan="">Marks Obtained</th></tr>
      			<!-- <script>createColHeader();</script> -->
      			<tr id="dynamic-header"></tr>
        	</thead>
        </table>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript">
        	var counter = 0;
        	var buttoncount=0;
function moreFields() {
	buttoncount++;
	var remBtn=document.getElementById('rem').style.display="inline-block";
	if(getselLen()<9){
		
	//if(document.getElementById('add-more-btn').disabled==true){
		
	//}
	counter++;
	var field=document.getElementsByClassName('form-group');
	//console.log(field[0]);
	var newFields = document.getElementById(field[0].id).cloneNode(true);
	
	newFields.id = 'add-more'+getselLen();
	
	//newFields.style.display = 'block';
	var newField = newFields.childNodes;
	for (var i=0;i<newField.length;i++) {
		var theName = newField[i].name;
		var theID = newField[i].id;
		if (theName){
			newField[i].name = theName + getselLen();
			newField[i].id = theID + getselLen();
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
	//var elem=this.id;
	//console.log(this.id);
	document.getElementById(btn_id).parentNode.remove();
	if(document.getElementById('add-more-btn').disabled){
		document.getElementById('add-more-btn').disabled=false;
	}
	resetIds();
}
function resetIds(){
	getFields=document.getElementsByClassName('form-group');
//	console.log(getFields[0].id);
	//getChildFields=
	for (var i = getFields.length-1; i >=0 ; i--) {
		getFields[i].id='add-more'+i;
		getChildFields=getFields[i].childNodes;
		//console.log(getChildFields);
		for (var j=0;j<getChildFields.length;j++) {
		var whole_name=getChildFields[j].name;
		var whole_id=getChildFields[j].id;
		//var split_name=whole_name.split(/([0-9]+)/);
		//console.log(whole_name);
		//var theName = getChildFields[j].name;
		 //whole_name.split(/(\d+)/);
		//var theID = getChildFields[j].id;
		if (whole_name){
			var theName=whole_name.split(/([0-9]+)/);
			var theID=whole_id.split(/([0-9]+)/);
			//console.log(theName[0]);
			getChildFields[j].name = theName[0] + i;
			getChildFields[j].id = theID[0] + i;
		}
		}
	}
}

function createColHeader(){
	var head=document.getElementById('MOspan');
	head.colSpan=getselLen();
	//console.log(head);
	
	var res_tbl=document.getElementById('dynamic-header');
	//console.log(res_tbl.cells.length);
	//res_tbl.cells.length=getselLen();
	for (var i = res_tbl.cells.length-1; i >=0 ; i--) {
		//console.log(res_tbl.cells[i])
		res_tbl.deleteCell(i);
	}

	var selectChoice=document.getElementsByTagName('select');
	for (var i = 0; i < getselLen(); i++) {
		var cell1 = res_tbl.insertCell(i);
		cell1.innerHTML=selectChoice[i].options[selectChoice[i].selectedIndex].text;//selectChoice[i].val;
	}
  //var cell1 = res_tbl.insertCell(0);
  //ar cell2 = res_tbl.insertCell(1);
  //cell1.innerHTML = "Just";
 // cell2.innerHTML = "Checking";
}

        	/*$('#add-more').on('click',function() {

         //year = $(this).children("option:selected").val();
         //if($("#course-name").prop('disabled', false)){
          //$('#course-name').empty();
          $('#add-more').append(new Option('-----', ''));
          $("#course-name").val('').prop('selected', true);
          $("#course-name").prop('disabled', true);
          $("#sem").val('').prop('selected', true);
          $("#course-name").val('').prop('selected', true);
         //}
      
      });*/
        </script>
</body>
</html>