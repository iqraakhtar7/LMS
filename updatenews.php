<?php
error_reporting(0);
        
        session_start();
        $link = mysqli_connect("localhost","root","");
        mysqli_select_db($link,"dcs-ubit");
       


  include 'conn.php';

  if(isset($_POST['submit1'])){

$id = $_GET['id'];
$ndate = $_POST['ndate'];
 $nheadline = $_POST['nheadline'];
 $ndesc = $_POST['ndesc'];
 
 $q = " update news set news_date= '$ndate',
 news_headline='$nheadline', news_desc='$ndesc' where id=$id ";

  $query = mysqli_query($link,$q);

  header('location:displaynews.php');
 }

?>

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
                    <h3 style="margin-bottom: 25px; text-align: center;" class="msg">NEWS UPDATE</h3>
            

          
          <div class="form-group">
            <input type="text" class="form-control" id="n_date" name="ndate" placeholder="Date" required >
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="n_hedline" name="nheadline" placeholder="News Headline" required >
          </div>
          
          
          <div class="form-group">
                    <textarea class="form-control" type="textarea" id="n_desc" name="ndesc" placeholder="News Description" rows="7"></textarea>
                 
                    </div>

                    
            
        <input type="submit" id="submit" name="submit1" class="btn btn-primary pull-right" value="Add News"></input>
        </form>
    </div>
</div>
</div>
  </form>
  </div>
 </form>
 </div>
</body>
</html>