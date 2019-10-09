<?php 

    session_start();
    
    include 'conn.php';

    $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);

   
    if(isset($_POST['login'])){

    	$name=	mysqli_real_escape_string($link,$_POST['adm_name']);
    	$pwd = mysqli_real_escape_string($link,$_POST['adm_password']);

    	if ($_POST['adm_name']=='admin' && $pwd=='admin') {
    		$_SESSION['admin']=$_POST['adm_name'];
    		header("Location: admin.php");
    	}
    	else{
    		header("Location: index.php");
    	}
    
	}
   else{
    echo "<script>alert('Error!');</script>";

   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin-login</title>
</head>
<body>
	<script type="text/javascript" src="../js/jquery-3.2.1.min.js">
		
	</script>
<script type="text/javascript">
	alert("I am here");
	console.log("I am here");
	var pwd=prompt("Enter password");
	$.ajax({
		type: "POST",
		url: "adm_log.php",
		data: {"password":pwd},
		dataType: "json",
		success: function(object,textstatus){
			if(!('error' in object)){
				result=object.result;
				alert(result);
			}
			else{
				console.log(object.error);
			}

		},

		error: function(req,status,err){
			console.log("something went wrong", status, err);
		}

	});

</script>


</body>
</html>