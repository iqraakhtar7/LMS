<!DOCTYPE html>
<html lang="en">
<head>
<title>UBIT-LMS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">

<!--crud -->

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <!--crud end -->
</head>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head 

    <!-- Bootstrap -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">

    <!-- Cascading Style Sheet Attachment -->
    <link rel="stylesheet" type="text/css" href="css/MyStyle.css">
   
    <!-- Animate.css Attachment -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Font Awesome Icons Linking -->

    <link href="fa/css/font-awesome.min.css" rel="stylesheet">

  <!-- Online Fonts Attachment -->

    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">

    <!-- Favicon Attachment -->
  
    <link rel="shortcut icon" href="images/favicon.ico" type="img/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">


  </head>
﻿
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dcs-ubit");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>
   
      
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

<?php
if(isset($_POST["submit1"]))
{
   $v1=rand(1111,9999);   //for random image name 
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
   $v3=md5($v3);
   
   
   //$fnm=$_FILES["nimage"]["name"];
   //$dst="./images/".$v3.$fnm;
   //$dst1="images/".$v3.$fnm;
   //move_uploaded_file($_FILES["nimage"]["tmp_name"],$dst);


//mysqli_query($link,"insert into product values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pdesc]')");

if(!mysqli_query($link,"insert into news values('','$_POST[ndate]',
  '$_POST[nheadline]','$_POST[ndesc]')"));
{
  echo(mysqli_error($link));
  } 

mysqli_close($link);
}
?>          
          
          
                </div>
            </div>

  

