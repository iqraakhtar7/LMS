

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="grid_10">
            
                
                <div class="eventform">
                 <div class="container">
    <div class="form-area">  
      <div class="block">
        <form name="form1" action="" method="post" enctype="multipart/form-data">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;" class="msg">Update Event</h3>
            <div class="form-group">
            <input type="text" class="form-control" id="e_date" name="edate" placeholder="Event Date" required >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="e_month" name="emonth" placeholder="Event Month" required >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="e_name" name="ename" placeholder="Event Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="e_loc" name="eloc" placeholder="Event Location" required >
          </div>
          <div class="form-group">
                    <textarea class="form-control" type="textarea" id="e_desc" name="edesc" placeholder="Event Description" maxlength="1000000" rows="7"></textarea>
                 
                    </div>

          <div class="form-group">
            <h4>Event Image</h4>
            <input type="file" class="form-control" id="e_image" name="eimage" placeholder="Event Image" required>
          </div>
                    
            
        <input type="submit" id="submit" name="submit1" class="btn btn-primary pull-right" value="Update Event"></input>
        </form>
    </div>
</div>
</div>
  </form>

  <?php
error_reporting(0);
        
        session_start();
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"dcs-ubit");
       


  include 'conn.php';

  if(isset($_POST['submit1'])){
  
  $v1=rand(1111,9999);   //for random image name 
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
  $v3=md5($v3);
   
   
   $fnm=$_FILES["eimage"]["name"];
   $dst="./images/".$v3.$fnm;
   $dst1="images/".$v3.$fnm;
   move_uploaded_file($_FILES["eimage"]["tmp_name"],$dst);


$id = $_GET['id'];
$edate = $_POST['edate'];
 $emonth = $_POST['emonth'];
 $ename = $_POST['ename'];
 $eloc = $_POST['eloc'];
 $edesc = $_POST['edesc'];
 $eimg = $_POST['eimage'];
$fimg=$dst1.$eimg;


 $q = " UPDATE event_table set event_date= $edate, event_month='$emonth',
 event_name='$ename', event_loc='$eloc', event_desc='$edesc', event_img='$dst1' where id=$id  ";

  $query = mysqli_query($link,$q);

  header('location:display.php');
 }

?>
  </div>
 </form>
 </div>
</body>
</html>