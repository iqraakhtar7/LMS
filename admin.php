<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
  nav.col-md-2.d-none.d-md-block.bg-light.sidebar.pq {
    background-color: #ffb606 !important;
}
h3{
  margin-top: -25px;

}
input[type="file"] {
    padding: 5px;
        font-size: 23px;
    }
.academic,.personal {
    display: flex;
    justify-content: space-around;
}
.personal2,.personal3,.personal4
{
   display: flex;
    justify-content: center;
}
h3 {
   color: #3e5d3e !important;
    text-shadow: 1px 1px 0 #5d8dd7;
  }

img.iconimage {
  opacity: 0.9;
         height: 140px;
    width: 157px;
    border: 2px solid #ffb606;
    box-shadow: 4px 4px 0 #c5b32f;
    margin: 5px;
    border-radius: 15px;
}
button.btn1 {
    border-radius: 5px;
    background-color: #c1d9a6;
    padding: 10px;
}
	.bg-light {
    background-color: #ffb606 !important; 
}
.dropbtn {
  background-color: papayawhip;
  margin: 2px;
  border: none;
}
button.btn-primary.btn.text-white.xx
{
  width: 100px;
  margin-top: 6px;
  margin-left: 15px;
}

button.btn1 {
       min-width: 29%;
    height: 55px;
    border-radius: 5px;
         background-color: #7bba73;
    padding: 10px;
    font-size: 22px;
    color: #213d2b;
    font-style: oblique;
    font-weight: 600;
    margin-right: 10px;
    margin-left: 10px;
}
.btn1.pp {
       min-width: 39%;
 
}
table {
    text-align: center;
}
.tr1{
  background-color: black;
  color:white;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: wheat;

  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
h2.nav-link.active {
    margin-bottom: -11px;
}
 
  nav.col-md-2.d-none.d-md-block.bg-light.sidebar.pq {
    background-color: #ffb606 !important;
}
img.iconimage {
  opacity: 0.9;
         height: 140px;
    width: 157px;
    border: 2px solid #ffb606;
    box-shadow: 4px 4px 0 #c5b32f;
    margin: 5px;
    border-radius: 15px;
}


table {
  width: 60%;
  border-collapse: collapse;
  margin: 10px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
.modal-lg {
    max-width: 1025px !important;
}
nav.col-md-2.d-none.d-md-block.bg-light.sidebar.pq {
    background-color: #ffb606 !important;
}
.icons {
    display: flex;
    justify-content: space-evenly;
}
span{
  font-size: 18px;
}
img.iconimage {
  opacity: 0.9;
         height: 140px;
    width: 157px;
    border: 2px solid #ffb606;
    box-shadow: 4px 4px 0 #c5b32f;
    margin: 5px;
    border-radius: 15px;
}
.InformationDiv1,.InformationDiv2,.InformationDiv3,.InformationDiv4,.InformationDiv6{
  display: none;

}

.batch15SE,.batch16SE,.batch17SE,.batch18SE,.batch15CS,.batch16CS,.batch17CS,.batch18CS,.batch17MCS,.batch18MCS{
  display: none;
}
.EP15SE,.EP16SE,.EP17SE,.EP18SE,.EP15CS,.EP16CS,.EP17CS,.EP18CS,.EP17MCS,.EP18MCS{
  display: none;
}
.depFacProfessor,.depFacAssProfessor,.depFacLecturer,.visFacProfessor,.visFacAssProfessor,.visFacLecturer,.faculty_contract{
  display: none;
}
.nav-item a{
  font-size: 21px !important;
}
.Information {
    margin-top: -36px;
}
h1 {
    color: #71a171 !important;
    text-shadow: 2px 1px 0 #aa9668;
}
h3 {
    color: #74741b;
    font-weight: 600 !important;
    font-size: 25px !important;
    /* text-decoration: dotted; */
  
    margin-top: 17px !important;
    margin-bottom: 6px !important;
    /* font-size: 1.75rem; */
    font-family: inherit !important;
    }
    .modal-header {
    padding-bottom: 2px !important;
    padding-top: 3px !important;
  }
  .batch{
    display: inline-block;
  }
  .batch li{
    font-size: 17px;
  }
  .batch span{
    font-size: 21px;
    color:purple;
  }
   span.program{
    font-size: 23px;
    color:green;
  }
 .tab-content1{
  display: flex;
  justify-content: space-around;
 }
</style>

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<!-- <link href="bs/css/bootstrap.min.css" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="styles/dash.css">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

  </head>
  <body>
     <?php if (!isset($_SESSION['admin'])): ?>
      
      <fieldset style="width: 20%; margin-left: 35%;">
      <div class="container">
        <center><h4 style="margin-top: 20px;">Admin Login</h4><hr color="#000"></center>        
      </div>
      <div class="container">
        <form action="adm_log.php" method="post" id="adm-log-form">
          <div class="form-group">
            <h5><label for="adm-name" class="control-label">Name :</label></h5>
            <input type="password" class="form-control" id="adm-name" name="adm_name">
          </div>
          <div class="form-group">
            <h5><label for="adm-pwd" class="control-label">Password :</label></h5>
            <input type="password" class="form-control" id="adm-pwd" name="adm_password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="adm-log-form" method="post" name="login" style="width: 100%;">Login</button>

        
      </div>
      </fieldset>
  <!--  <div class="modal fade in" tabindex="-1" role="dialog" id="myModal" style="display: block;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Admin Login</h4>        
      </div>
      <div class="modal-body">
        <form action="adm_log.php" method="post" id="adm-log-form">
          <div class="form-group">
            <h5><label for="adm-name" class="control-label">Name :</label></h5>
            <input type="password" class="form-control" id="adm-name" name="adm_name">
          </div>
          <div class="form-group">
            <h5><label for="adm-pwd" class="control-label">Password :</label></h5>
            <input type="password" class="form-control" id="adm-pwd" name="adm_password">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" form="adm-log-form" method="post" name="login" style="width: 100%;">Login</button>

        
      </div>
    </div><!-- /.modal-content -->

  <!-- /.modal-dialog -->
<!-- /.modal -->
<?php endif ?>


    <?php if (isset($_SESSION['admin'])): ?>

    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Admin Profile</a>
  
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="log_reg/end_session.php">Back to Home / Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar pq">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="admin.php">
              <span data-feather="file"></span>
             Dashboard
            </a>
          </li>
     
           <h2 class="nav-link active" href="#">
              <span data-feather="home"></span>
              Summary Tables
            </h2>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="myfunc3();">
              <span data-feather="file"></span>
             Students
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="myfunc4();">
              <span data-feather="shopping-cart"></span>
            Teachers
            </a>
          </li>
            
         
        </ul>
<ul class="nav flex-column">
          
            <h2 class="nav-link active" href="#">
              <span data-feather="home"></span>
              Update Tables
            </h2>
        
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="myfunc1();">
              <span data-feather="file"></span>
          Add New Student
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="myfunc2();">
              <span data-feather="shopping-cart"></span>
          Add New Teacher
            </a>
          </li>
            
         
        </ul>
       

       
      
      </div>
    </nav></div></div>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"dcs-ubit");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
?>
   
      
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 qq" style="background-image: url(images/search_background1.png); background-size: cover; background-repeat: no-repeat;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
          </div>
       <div class="Information">
          <h3>Home Page Event Management</h3>
       	<div class="academic">
       	
   <button class="btn1" data-toggle="modal" data-target="#myModal4">
   View List</button>
          
             


              
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Event List</h1>
                   </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Event Date </th>
 <th> Event Month </th>
 <th> Event Name </th>
 <th> Event Location </th>
 <th> Event Description </th>
 <th> Event Image </th>


  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from event_table ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['event_date'];  ?> </td>
 <td> <?php echo $res['event_month'];  ?> </td>
 <td> <?php echo $res['event_name'];  ?> </td>
 <td> <?php echo $res['event_loc'];  ?> </td>
 <td> <?php echo $res['event_desc'];  ?> </td>
 <td> <?php echo $res['event_img'];  ?> </td>


  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
                <button class="btn1" data-toggle="modal" data-target="#myModal">
    Add New Event</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Add New Event</h1>
                   </h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                               <form name="form1" action="" method="post" enctype="multipart/form-data">
        <br style="clear:both">
                  
            <div class="form-group">
            <input type="Date" class="form-control" id="e_date" name="edate" placeholder="Event Date" required >
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="e_name" name="ename" placeholder="Event Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="e_loc" name="eloc" placeholder="Event Location" required >
          </div>
          <div class="form-group">
                    <textarea class="form-control" type="textarea" id="e_desc" name="edesc" placeholder="Event Description" maxlength="100000" rows="7"></textarea>
                 
                    </div>

          <div class="form-group">
            <h4>Event Image</h4>
            <input type="file" class="form-control" id="e_image" name="eimage" placeholder="Event Image" required>
          </div>
                    
            
        <input type="submit" id="submit" name="submit1" class="btn btn-primary pull-right" value="Add Event" onclick="Location.reload();"></input>
        </form>


                                

<?php
if(isset($_POST["submit1"]))
{
   $v1=rand(1111,9999);   //for random image name 
   $v2=rand(1111,9999);
   
   $v3=$v1.$v2;
   
  // $v3=md5($v3);
   
   
   $fnm=$_FILES["eimage"]["name"];
   $dst="./images/".$v3.$fnm;
   $dst1="images/".$v3.$fnm;
   move_uploaded_file($_FILES["eimage"]["tmp_name"],$dst1);



  $event_date = $_POST['edate']; 
  //$event_date1=date_format($event_date,"m/d/y");

   

   //**********event name validation***********

  $event_name = $_POST['ename'];
  //$event_exp = "/[a-zA-Z_\'\0-9]+$/";
  
  //if(!preg_match($event_exp,$event_name)) {
  // }
  //else{
   // echo "<script>alert('error')</script";
 // }

  $str_array=explode('-',$event_date);
  //print_r($str_array[2]);
  //print_r($str_array[1]);
  $_SESSION['edate']=$str_array[2];
  $_SESSION['emon']=$str_array[1];
  $month_name = date('F',mktime(0,0,0, $_SESSION['emon'],10));

   if(!mysqli_query($link,"insert into event_table values('','$str_array[2]',
    '$month_name','$event_name','$_POST[eloc]','$_POST[edesc]','$dst1')"));
{
  echo(mysqli_error($link));
  }

  //$str_arr = preg_split ("'[/.-]'", $event_date); 
  



mysqli_close($link);
}





?>  
         
          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
       	

                <button class="btn1" data-toggle="modal" data-target="#myModal1">
  Update / Delete Event </button>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Update/ Delete Event</h1>
                   </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Event Date </th>
 <th> Event Month </th>
 <th> Event Name </th>
 <th> Event Location </th>
 <th> Event Description </th>
 <th> Event Image </th>
 <th> Delete </th>
 <th> Update </th>

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from event_table ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['event_date'];  ?> </td>
 <td> <?php echo $res['event_month'];  ?> </td>
 <td> <?php echo $res['event_name'];  ?> </td>
 <td> <?php echo $res['event_loc'];  ?> </td>
 <td> <?php echo $res['event_desc'];  ?> </td>
 <td> <?php echo $res['event_img'];  ?> </td>

 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>


  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
     </div>   

                <h3>Home Page News Management</h3>
       	<div class="personal">
       	
   <button class="btn1" data-toggle="modal" data-target="#myModal5">
   View List</button>
          
             


              
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >News List</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> News Date </th>
 <th> News Headline </th>

 <th> News Description </th>



  </tr >

  <?php
 include 'conn.php'; 
 $q = "select * from news ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['news_date'];  ?> </td>
 <td> <?php echo $res['news_headline'];  ?> </td>
 <td> <?php echo $res['news_desc'];  ?> </td>


  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
                <button class="btn1" data-toggle="modal" data-target="#myModal2">
   Add News </button>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Add News</h1>
                   </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                      
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

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
        <button class="btn1" data-toggle="modal" data-target="#myModal3">
    Update / Delete News</button>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Update/ Delete News</h1>
                   </h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                
  <div class="container">
 <div class="col-lg-12">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr style="background-color: #343a40; color: white; text-align: center;">
 
 <th> Id </th>
 <th> News Date </th>
 <th> News Headline </th>
  <th> News Description </th>
 <th> Delete </th>
 <th> Update </th>

 

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from news ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['news_date'];  ?> </td>
 <td> <?php echo $res['news_headline'];  ?> </td>
 
 <td> <?php echo $res['news_desc'];  ?> </td>
 

 <td> <button style="background-color: #dc3545; color: white; padding: 6px 16px; border: 1px solid #dc3545;  border-radius: 5px"> <a style="text-decoration: none;" href="dltnews.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button style="background-color: #007bff; color: white; padding: 6px 16px; border: 1px solid #007bff;  border-radius: 5px"> <a style="text-decoration: none;" href="updatenews.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>

</div>
 <h3>Contact Page Mails Management</h3>
    <div class="personal2">
         
 <button class="btn1" data-toggle="modal" data-target="#myModal6">
   View Msg List</button>
          
       


              
<div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Message List</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">
 
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> SENDER NAME </th>
 <th> SENDER EMAIL </th>
  <th> SENDER MESSAGE </th>


 

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from contact_email ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['message'];  ?> </td>
 

 
  </tr>
  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
           <button class="btn1" data-toggle="modal" data-target="#myModal7">
   Reply/Delete Messages</button>
          
       


              
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Reply/ Delete Messages</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">

 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> SENDER NAME </th>
 <th> SENDER EMAIL </th>
  <th> SENDER MESSAGE </th>
 <th> Delete </th>
 <th> REPLY </th>

 

  </tr >

  <?php

  include 'conn.php'; 
 $q = "select * from contact_email ";

  $query = mysqli_query($con,$q);

  while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['email'];  ?> </td>
 <td> <?php echo $res['message'];  ?> </td>
 

 <td> <button style="background-color: #dc3545; color: white; padding: 6px 16px; border: 1px solid #dc3545;  border-radius: 5px"> <a style="text-decoration: none;" href="dltmsg.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button id="reply" style="background-color: #007bff; color: white; padding: 6px 16px; border: 1px solid #007bff;  border-radius: 5px"> <a style="text-decoration: none;" href="replymsg.php" class="text-white"> REPLY </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       

     </div>   
         <h3>Semester Schedule</h3>
 <div class="personal2">
         
           <button class="btn1 pp" data-toggle="modal" data-target="#myModal10">
  View / Upload New Schedule</button>
          
       


              
<div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
         <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Upload New Semester Schedule</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">

      <div class="container">
      <div class="row">
        <form action="admin.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button class="btn-primary btn text-white xx" type="submit" name="save">upload</button>
         
        </form>
      </div>
    </div>
 

<?php include 'fileLogic.php';?>


<table>
<thead class="tr1" >
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="fileupload.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       
          
       
          
       
       

     </div>   
 <h3>Examination Schedule</h3>
 <div class="personal2">
  
           <button class="btn1 pp" data-toggle="modal" data-target="#myModal11">
  View / Upload New Schedule</button>
          
       


              
<div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >Upload New Examination Schdeule</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">

      <div class="container">
      <div class="row">
        <form action="fileupload2.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save" class="btn-primary btn text-white xx">upload</button>
        
        </form>
      </div>
    </div>
 

<?php include 'filelogic2.php';?>


<table>
<thead class="tr1" >
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="fileupload2.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       

     </div>   
 <h3>Important Announcement</h3>
 <div class="personal2">
    
        
           <button class="btn1 pp" data-toggle="modal" data-target="#myModal13">
  View / Upload New Announcement</button>
          
       


              
<div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">
                <h1 class="text-warning text-center" >View / Upload New Announcement</h1>
                   </h4>
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                              

                                 <div class="container">
 <div class="col-lg-12">
 

      <div class="container">
      <div class="row">
        <form action="fileupload3.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save"  class="btn-primary btn text-white xx">upload</button>

        </form>
      </div>
    </div>
 

<?php include 'fileLogic3.php';?>


<table>
<thead class="tr1">
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="fileupload3.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       
          
       
          
       
       

     </div>   

     <h3>Assign Courses To Teachers</h3>
 <div class="personal2">
    
        
           <button class="btn1 pp" data-toggle="modal"  onclick="window.location.href = 'assign_class.php';" >
     Assign Classes</button>
  
</div></div>

       <div class="InformationDiv1">
 
 <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <center> <h4 class="modal-title" id="myModalLabel">
                   Add New Students</h4></center> 
             
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login2">
                                <form role="form" class="form-horizontal" method="post">
                                <input  class="input_field " type="text" placeholder="Enrollement.No" required="required" data-error="Enrollment is required, if not issued enter N/A" name="enrol_no">
                                 <input  class="input_field " type="text" placeholder="Seat.No" required="required" data-error="Seat.No is required." name="seat_no">
                                <input  class="input_field " type="text" placeholder="Full Name" required="required" data-error="full name is required." name="full_name">
                                <input  class="input_field " type="text" placeholder="Father Name" required="required" data-error="Father name is required." name="father_name">
                                <select class="input_field " type="text" placeholder="Batch Id" required="required" data-error="Batch Id is required." name="batch_id">
                                <option  disabled selected hidden>Select Batch Id</option>
                                  <option value="15">Batch15</option>
                                  <option value="16">Batch16</option>
                                   <option value="17">Batch17</option>
                                    <option value="18">Batch18</option>
                                 
                                </select>
                                  <select class="input_field " type="text" placeholder="Program Id" required="required" data-error="Program Id is required." name="program_id">
                                <option  disabled selected hidden>Select Program</option>
                                  <option value="_SE">BS(SOFWTARE ENGINEERING)</option>
                                  <option value="_CS">BS(COMPUTER SCIENCE)</option>
                                   <option value="_MCS">MCS</option>
                                    
                                  

                                </select>
                                     <select class="input_field " type="text" placeholder="Shift" required="required" data-error="Shift is required." name="shift">
                                <option  disabled selected hidden>Select Shift</option>
                                  <option value="B">Morning</option>
                                  <option value="EP">Evening</option>
                               
                                </select>

                                 <select class="input_field " type="text" placeholder="Current Semester" required="required" data-error="Current semester is required." name="current_sem">
                                <option  disabled selected hidden>Select Current Semester</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                   <option>4</option>
                                  <option>5</option>
                                  <option>6</option>
                                    <option>7</option>
                                  <option>8</option>
                                </select>
                                   <select class="input_field " type="text" placeholder="Section" required="required" data-error="Section is required." name="sec">
                                <option  disabled selected hidden>Select Section</option>
                                  <option>A</option>
                                  <option>B</option>
                                  <option>C</option>
                                   
                                </select>
                                      <input  class="input_field " type="text" placeholder="Password" required="required" data-error="Password is required."name="student_password">
             
                
                <button id="student_add" type="submit" class="search_submit_button trans_200" value="Submit" name="student_add">Add Now</button>
                               
                              <?php

include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');
if(isset($_POST["student_add"]))
{

if($_POST['shift']=='B')
{
$shift="morning";
}
else
{
$shift="evening";
}


$class_id0=$_POST['shift'];
$class_id1=$_POST['batch_id'];
$class_id2=$_POST['program_id'];
$new_id=$class_id0.$class_id1.$class_id2;

if(!mysqli_query($link,"INSERT INTO student_bsse_b15 (enrol_no,seat_no,name,fname,class_id,shift,password,sec,current_sem) VALUES('$_POST[enrol_no]','$_POST[seat_no]',
  '$_POST[full_name]','$_POST[father_name]','$new_id','$shift','$_POST[student_password]','$_POST[sec]','$_POST[current_sem]')"));
{
  echo(mysqli_error($link));
  } 

mysqli_close($link);
}


            ?>                   
                                </form>
                            </div>
                          </div>
                          
                        </div>
                   
                    </div>
               
            </div>
        </div>
    </div>
</div>

       </div>

       <div class="InformationDiv2">
<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <center> <h4 class="modal-title" id="myModalLabel">
                   Add New Instructor</h4></center> 
             
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal" method="post">
                                <input  class="input_field" type="text" placeholder="Instuctor-Id" required="required" data-error="Instructor Id is required" name="ins_id">
                                 <input  class="input_field " type="text" placeholder="Full Name" required="required" data-error="Full name is required." name="ins_fname">
                                <input  class="input_field " type="text" placeholder="Instructor-init" required="required" data-error="Instructor-init is required." name="ins_init">
                                  <select class="input_field " type="text" placeholder="Instructor-Type" required="required" data-error="Instructor-Type is required." name="ins_type">

                                      <option  disabled selected hidden>Select Faculty Type</option>
                                  <option value="Dep_Fac_Professor">Department Faculty(Professor)</option>
                                  <option value="Dep_Fac_Ass_Professor">Department Faculty(Asst.Professor)</option>
                                   <option value="Dep_Fac_Lecturer">Department Faculty(Lecturer)</option>
                                  <option value="Vis_Fac_Professor">Visiting Faculty(Professor)</option>
                                  <option value="Vis_Fac_Ass_Professor">Visiting Faculty(Asst.Professor)</option>
                                    <option value="Vis_Fac_Lecturer">Visiting Faculty(Lecturer)</option>
                                  <option value="faculty_Contract">On Contract/Adhoc</option>
                                 
                                  </select>
                                <input  class="input_field " type="email" placeholder="Email" required="required" data-error="email is required." name="ins_email">
                               
                                      <input  class="input_field " type="text" placeholder="Password" required="required" data-error="Password name is required." name="ins_password">
             
                
                <button id="instructor_add" type="submit" class="search_submit_button trans_200" name="instructor_add" value="Submit">Add Now</button>
       
            <?php

include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');
if(isset($_POST["instructor_add"]))
{
 /* $insid = $_POST['ins_id'];
$insname = $_POST['ins_fname'];
$insinit = $_POST['ins_init'];
$insemail = $_POST['ins_email'];
$inspassword =$_POST['ins_password'];
      
         $selectSQL2= "INSERT INTO  instructor_list VALUES (insid,insname,insinit,insemail,inspassword)";*/

  


if(!mysqli_query($link,"INSERT INTO instructor_list (instructor_id,instructor_name,instructor_init,instructor_email,instructor_password,instructor_type) VALUES('$_POST[ins_id]','$_POST[ins_fname]',
  '$_POST[ins_init]','$_POST[ins_email]','$_POST[ins_password]','$_POST[ins_type]')"));
{
  echo(mysqli_error($link));
  } 

mysqli_close($link);
}


            ?>                   
                             
                                </form>
                            </div>
                          </div>
                          
                        </div>
                   
                    </div>
               
            </div>

        </div>
    </div>
</div>

        
       </div>

       <div class="InformationDiv3">
<div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <center> <h4 class="modal-title" id="myModalLabel">
                   Click to View Batch List</h4></center> 
             
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content1">
                           <ul class="batch"><span class="program">MORNING</span><BR>
                            <span>BSSE</span>
                             <li><a href="#" name=" " id="B15SE" onclick="batchfuncB15SE();">Batch:B15,BSSE</a></li>
                             <li><a href="# " onclick="batchfuncB16SE();">Batch:B16,BSSE</a></li>
                             <li><a href="#"  id="B17SE" onclick="batchfuncB17SE();">Batch:B17,BSSE</a></li>
                             <li><a href="#"  id="B18SE" onclick="batchfuncB18SE();">Batch:B18,BSSE</a></li>
                  
                            
                                 <span>BSCS</span>
                              <li><a href="#" onclick="batchfuncB15CS();">Batch:B15,BSCS</a></li>
                               <li><a href="#" onclick="batchfuncB16CS();">Batch:B16,BSCS</a></li>
                                <li><a href="#" onclick="batchfuncB17CS();">Batch:B17,BSCS</a></li>
                            <li><a href="#" onclick="batchfuncB18CS();">Batch:B18,BSCS</a></li>
                               <span>MCS</span>
                              <li><a href="#" onclick="batchfuncB17MCS();">Batch:B17,MCS</a></li>

                             <li><a href="#" onclick="batchfuncB18MCS();">Batch:B18,MCS</a></li>
                            
                      
                           </ul> 
                            <ul class="batch"><span class="program">EVENING</span><br>
                               <span>BSSE</span>
                             <li><a href="#" onclick="batchfuncEP15SE();">Batch:EP15,BSSE</a></li>
                             <li><a href="#" onclick="batchfuncEP16SE();">Batch:EP16,BSSE</a></li>
                             <li><a href="#" onclick="batchfuncEP17SE();">Batch:EP17,BSSE</a></li>
                             <li><a href="#" onclick="batchfuncEP18SE();">Batch:EP18,BSSE</a></li>
                  
                            
                                 <span>BSCS</span>
                              <li><a href="#" onclick="batchfuncEP15CS();">Batch:EP15,BSCS</a></li>
                               <li><a href="#" onclick="batchfuncEP16CS();">Batch:EP16,BSCS</a></li>
                                <li><a href="#" onclick="batchfuncEP17CS();">Batch:EP17,BSCS</a></li>
                            <li><a href="#" onclick="batchfuncEP18CS();">Batch:EP18,BSCS</a></li>
                               <span>MCS</span>
                              <li><a href="#" onclick="batchfuncEP17MCS();">Batch:EP17,MCS</a></li>

                             <li><a href="#" onclick="batchfuncEP18MCS();">Batch:EP18,MCS</a></li>
                            
                      
                           </ul>
                         
                          </div>
                          
                        </div>
                   
                    </div>
               
            </div>
        </div>
    </div>
</div>
       <div class="InformationDiv4">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
             <center> <h4 class="modal-title" id="myModalLabel">
                   Click Below to View Faculty List</h4></center> 
             
             
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                       
                        <!-- Tab panes -->
                        <div class="tab-content1">
                       <center>    <ul class="batch">
                       
                             <li><a href="#" onclick="depFacProfessor();">Department Faculty(Professor)</a></li>
                              <li><a href="#" onclick="depFacAssProfessor();">    Department Faculty(Asst. Professor)</a></li>
                                <li><a href="#" onclick="depFacLecturer();">    Department Faculty(Lecturer)</a></li>
                               <li><a href="#" onclick="visFacProfessor();">   Visiting Faculty(Professor)</a></li>
                              <li><a href="#" onclick="visFacAssProfessor();">    Visiting Faculty(Asst. Professor)</a></li>
                               <li><a href="#" onclick="visFacLecturer();">    Visiting Faculty(Lecturer)</a></li>
                                  <li><a href="#" onclick="faculty_contract();">  Faculty  On Contract/Adhoc</a></li>
                                 
                            
                           </ul> </center>
                          </div>
                          
                        </div>
                   
                    </div>
               
            </div>
        </div>
    </div>
       </div>
<div class="batch15SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B15_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>

   <div class="batch16SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B16_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch17SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B17_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch18SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B18_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch15CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B15_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch16CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B16_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch17CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B17_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch18CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B18_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch17MCS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B17_MCS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="batch18MCS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='B18_MCS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP15SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP15_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>

   <div class="EP16SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP16_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP17SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP17_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP18SE">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP18_SE'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP15CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP15_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP16CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP16_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP17CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP17_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP18CS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP18_CS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  
    <div class="EP17MCS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP17_MCS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
   <div class="EP18MCS">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Enrollment.NO </th>
 <th> Seat.No </th>
 <th> Full Name </th>
 <th> Father Name </th>
  <th> Program </th>
 <th> Shift </th>
 <th> Current Semester </th>
 <th> Section </th>


  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *,class_key.program 
FROM student_bsse_b15 
LEFT JOIN class_key ON student_bsse_b15.class_id = class_key.class_id WHERE student_bsse_b15.class_id='EP18_MCS'
ORDER BY student_bsse_b15.seat_no";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['enrol_no'];  ?> </td>
 <td> <?php echo $row1['seat_no'];  ?> </td>
 <td> <?php echo $row1['name'];  ?> </td>
 <td> <?php echo $row1['fname'];  ?> </td>
  <td> <?php echo $row1['program'];  ?> </td>
  <td> <?php echo $row1['shift'];  ?> </td>
 <td> <?php echo $row1['current_sem'];  ?> </td>
  <td> <?php echo $row1['sec'];  ?> </td>



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>

<div class="depFacProfessor">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Dep_Fac_Professor'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>

   <div class="depFacAssProfessor">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Dep_Fac_Ass_Professor'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  
   <div class="depFacLecturer">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Dep_Fac_Lecturer'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  
    <div class="visFacProfessor">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Vis_Fac_Professor'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  
   <div class="visFacAssProfessor">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Vis_Fac_Ass_Professor'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  
 <div class="visFacLecturer">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='Vis_Fac_Lecturer'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>
  

    <div class="faculty_contract">
    <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Instructor ID </th>
 <th> Full Name </th>
 <th> Instructor Init </th>
  <th> Instructor Email </th>
 <th> Password </th>
 
  </tr >

  <?php

 include 'conn.php';
  
  $con = mysqli_connect('localhost','root','','dcs-ubit');

         $selectSQL1= "SELECT *
FROM instructor_list
 WHERE instructor_type='faculty_Contract'
ORDER BY instructor_id";
      
$selectRes1 = mysqli_query($con, $selectSQL1 );

 
    if (mysqli_num_rows($selectRes1) > 0) {
     while($row1 = mysqli_fetch_assoc($selectRes1)) {
 ?>
 <tr class="text-center">
 <td> <?php echo $row1['instructor_id'];  ?> </td>
 <td> <?php echo $row1['instructor_name'];  ?> </td>
 <td> <?php echo $row1['instructor_init'];  ?> </td>
 <td> <?php echo $row1['instructor_email'];  ?> </td>
  <td> <?php echo $row1['instructor_password'];  ?> </td>
 



  </tr>

  <?php 
 }
}
else{
   echo "0 results";
}
  ?>
 
 </table> 

   </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="480"></canvas>

      
    

</main>
<?php endif ?>
 <script type="text/javascript">
  $('#myModal').modal('show');
  $('#myModal1').modal('show');
  $('#myModa2').modal('show');
  $('#myModal3').modal('show');
  $('#myModal4').modal('show');
  $('#myModal5').modal('show');
   $('#myModal6').modal('show');
   $('#myModal7').modal('show');
  $('#myModal9').modal('show');
  $('#myModal8').modal('show');
   $('#myModal10').modal('show');
    $('#myModal11').modal('show');
// www.jquery2dotnet.com
</script>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">
function myfunc1()
{
$(".Information").hide(1000);
$(".InformationDiv2").hide(1000);
$(".InformationDiv3").hide(1000);
$(".InformationDiv4").hide(1000);
$(".InformationDiv1").slideDown();
}
function myfunc2()
{
 $(".Information").hide(1000);
 $(".InformationDiv1").hide(1000);
 $(".InformationDiv3").hide(1000);
$(".InformationDiv4").hide(1000);

$(".InformationDiv2").slideDown(); 
}
function myfunc3()
{
$(".Information").hide(1000);
$(".InformationDiv2").hide(1000);
$(".InformationDiv1").hide(1000);
$(".InformationDiv4").hide(1000);
$(".batch18MCS").hide(1000);
$(".batch17MCS").hide(1000);
$(".batch18CS").hide(1000);
$(".batch17CS").hide(1000);
$(".batch16CS").hide(1000);
$(".batch15CS").hide(1000);
$(".batch18SE").hide(1000);
$(".batch17SE").hide(1000);
$(".batch16SE").hide(1000);
$(".batch15SE").hide(1000);
$(".EP18MCS").hide(1000);
$(".EP17MCS").hide(1000);
$(".EP18CS").hide(1000);
$(".EP17CS").hide(1000);
$(".EP16CS").hide(1000);
$(".EP15CS").hide(1000);
$(".EP18SE").hide(1000);
$(".EP17SE").hide(1000);
$(".EP16SE").hide(1000);
$(".EP15SE").hide(1000);
$(".depFacProfessor").hide(1000);
$(".depFacAssProfessor").hide(1000);
$(".depFacLecturer").hide(1000);
$(".visFacProfessor").hide(1000);
$(".visFacAssProfessor").hide(1000);
$(".visFacLecturer").hide(1000);
$(".faculty_contract").hide(1000);
$(".InformationDiv3").slideDown();

}

function myfunc4()
{
 $(".Information").hide(1000);
 $(".InformationDiv1").hide(1000);
 $(".InformationDiv2").hide(1000);
$(".InformationDiv3").hide(1000);
$(".batch18MCS").hide(1000);
$(".batch17MCS").hide(1000);
$(".batch18CS").hide(1000);
$(".batch17CS").hide(1000);
$(".batch16CS").hide(1000);
$(".batch15CS").hide(1000);
$(".batch18SE").hide(1000);
$(".batch17SE").hide(1000);
$(".batch16SE").hide(1000);
$(".batch15SE").hide(1000);
$(".EP18MCS").hide(1000);
$(".EP17MCS").hide(1000);
$(".EP18CS").hide(1000);
$(".EP17CS").hide(1000);
$(".EP16CS").hide(1000);
$(".EP15CS").hide(1000);
$(".EP18SE").hide(1000);
$(".EP17SE").hide(1000);
$(".EP16SE").hide(1000);
$(".EP15SE").hide(1000);
$(".depFacProfessor").hide(1000);
$(".depFacAssProfessor").hide(1000);
$(".depFacLecturer").hide(1000);
$(".visFacProfessor").hide(1000);
$(".visFacAssProfessor").hide(1000);
$(".visFacLecturer").hide(1000);
$(".faculty_contract").hide(1000);
$(".InformationDiv4").slideDown(); 
}

function batchfuncB15SE()
{
$(".InformationDiv3").hide(1000);
 $(".batch15SE").slideDown();
}
function batchfuncB16SE()
{
$(".InformationDiv3").hide(1000);
 $(".batch16SE").slideDown();
}
function batchfuncB17SE()
{
$(".InformationDiv3").hide(1000);
 $(".batch17SE").slideDown();
}
function batchfuncB18SE()
{
$(".InformationDiv3").hide(1000);
 $(".batch18SE").slideDown();
}
function batchfuncB15CS()
{
$(".InformationDiv3").hide(1000);
 $(".batch15CS").slideDown();
}
function batchfuncB16CS()
{
$(".InformationDiv3").hide(1000);
 $(".batch16CS").slideDown();
}
function batchfuncB17CS()
{
$(".InformationDiv3").hide(1000);
 $(".batch17CS").slideDown();
}
function batchfuncB18CS()
{
$(".InformationDiv3").hide(1000);
 $(".batch18CS").slideDown();
}
function batchfuncB17MCS()
{
$(".InformationDiv3").hide(1000);
 $(".batch17MCS").slideDown();
}function batchfuncB18MCS()
{
$(".InformationDiv3").hide(1000);
 $(".batch18MCS").slideDown();
}

function batchfuncEP15SE()
{
$(".InformationDiv3").hide(1000);
 $(".EP15SE").slideDown();
}
function batchfuncEP16SE()
{
$(".InformationDiv3").hide(1000);
 $(".EP16SE").slideDown();
}
function batchfuncEP17SE()
{
$(".InformationDiv3").hide(1000);
 $(".EP17SE").slideDown();
}
function batchfuncEP18SE()
{
$(".InformationDiv3").hide(1000);
 $(".EP18SE").slideDown();
}
function batchfuncEP15CS()
{
$(".InformationDiv3").hide(1000);
 $(".EP15CS").slideDown();
}
function batchfuncEP16CS()
{
$(".InformationDiv3").hide(1000);
 $(".EP16CS").slideDown();
}
function batchfuncEP17CS()
{
$(".InformationDiv3").hide(1000);
 $(".EP17CS").slideDown();
}
function batchfuncEP18CS()
{
$(".InformationDiv3").hide(1000);
 $(".EP18CS").slideDown();
}
function batchfuncEP17MCS()
{
$(".InformationDiv3").hide(1000);
 $(".EP17MCS").slideDown();
}function batchfuncEP18MCS()
{
$(".InformationDiv3").hide(1000);
 $(".EP18MCS").slideDown();
}
function depFacProfessor()
{
$(".InformationDiv4").hide(1000);
 $(".depFacProfessor").slideDown();
}
function depFacAssProfessor()
{
$(".InformationDiv4").hide(1000);
 $(".depFacAssProfessor").slideDown();
}
function depFacLecturer()
{
$(".InformationDiv4").hide(1000);
 $(".depFacLecturer").slideDown();
}
function visFacProfessor()
{
$(".InformationDiv4").hide(1000);
 $(".visFacProfessor").slideDown();
}
function visFacAssProfessor()
{
$(".InformationDiv4").hide(1000);
 $(".visFacAssProfessor").slideDown();
}
function visFacLecturer()
{
$(".InformationDiv4").hide(1000);
 $(".visFacLecturer").slideDown();
}function faculty_contract()
{
$(".InformationDiv4").hide(1000);
 $(".faculty_contract").slideDown();
}

</script>


</body>
</html>

