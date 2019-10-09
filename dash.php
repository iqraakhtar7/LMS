<?php session_start(); 
  if($_SESSION['seat_no']!=""){/*echo "<script>alert('Welcome here');</script>";*/}
    else{
      
      header("Location: index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course</title>
<style type="text/css">
  
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
.tr1
{
  background-color: black;
  color:white;
}
h1.less{
  margin-top: -25px !important;
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
.InformationDiv1,.InformationDiv2,.InformationDiv3,.InformationDiv4,.InformationDiv5,.InformationDiv6{
  display: none;

}
.nav-item a{
  font-size: 21px !important;
}

h1 {
    color: #71a171 !important;
    text-shadow: 2px 2px 0 #ffb606;
}
h3 {
    color: #74741b;
    font-weight: 600 !important;
    font-size: 34px !important;
    /* text-decoration: dotted; */
    text-shadow: 1px 1px 0 #dfcc46;
    margin-top: 17px !important;
    margin-bottom: 10px !important;
    /* font-size: 1.75rem; */
    font-family: serif !important;
    }
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="styles/dash.css">


    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Student Profile</a>
  
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
            <a class="nav-link active" href="dash.php">
              <span data-feather="home"></span>
              Dashboard<span class="sr-only">(current)</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Program<span class="sr-only">(current)</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="file"></span>
              <?php echo $_SESSION['username']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="shopping-cart"></span>
             <!--Class Year -->
             <?php echo $_SESSION['seat_no']; ?>

            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text" >
              <span data-feather="users"></span>
             Semester :
             <?php echo $_SESSION['sem']; ?>th
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="users"></span>
              Section : 
             <!--Section -->
             <?php echo $_SESSION['sec']; ?>
            </a>
          </li>
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Result Reports</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" onclick="myfunc4();" style="cursor: pointer">
              <span data-feather="file-text"></span>
              Fourth Year Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="myfunc3();" style="cursor: pointer;">
              <span data-feather="file-text">   </span>
              Third Year Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="myfunc2();" style="cursor: pointer;">
              <span data-feather="file-text"></span>
            Second Year Result
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onclick="myfunc1();" style="cursor: pointer;">
              <span data-feather="file-text"></span>
          First Year Result
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 qq" style="background-image: url(images/search_background1.png); background-repeat: no-repeat; background-size: cover;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="h2 none">  <?php echo $_SESSION['seat_no']; ?></h2>
          </div>
       <div class="Information">
       	<div class="academic">
       		<h3>Academic Information</h3>
            <div class=icons>
              <a href="" class="btn1" data-toggle="modal" data-target="#myModal"><img class="iconimage" src="images3/icon1.jpg"></a>
                <a href="" class="btn1" data-toggle="modal" data-target="#myModal2"><img class="iconimage" src="images3/icon2.jpg"></a>
                  <a onclick="myfunc5();" style="cursor: pointer;"><img class="iconimage" src="images3/icon4.png"></a>
                    <a href="" class="btn1" data-toggle="modal" data-target="#myModal3"><img class="iconimage" src="images2/announcement.jpg"></a>


            </div>
       	</div>
       	<div class="personal">
       		<h3>Personal Information</h3>
            <div class="icons">
               <a href="#" onclick="myfunc6();" style="cursor: pointer;" ><img class="iconimage" src="images2/icon7.jpg"></a>
                <a href="contact.php"><img class="iconimage" src="images2/icon10.jpg"></a>
                  <a href="#"><img class="iconimage" src="images2/icon11.jpg"></a>
                    <a href="#"><img class="iconimage" src="images2/icon13.png"></a>



            </div>
       	</div>
      </div>
      <center>
      <div class="InformationDiv1">

<h1 class="less">First Year Results</h1>


    <!-- VIEW RESULTS SECTION-->
  <?php
  $seat_no=$_SESSION['seat_no'];
  $sem=$_SESSION['sem'];
    $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester IN (1,2) ORDER BY course_list_bsse.semester ASC ";
  # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($link, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable">
      <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows( $selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
          $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];
        }
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>

</div>
 <div class="InformationDiv2">

    <h1 class="less">Second Year Results</h1>

    <!-- VIEW RESULTS SECTION-->
  <?php
  $seat_no=$_SESSION['seat_no'];
  $sem=$_SESSION['sem'];
    $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester IN (3,4) ORDER BY course_list_bsse.semester ASC ";
  # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($link, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable">
      <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows( $selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
          $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];
        }
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>
</div>
 <div class="InformationDiv3">

<h1 class="less">Third Year Results</h1>


    <!-- VIEW RESULTS SECTION-->
  <?php
  $seat_no=$_SESSION['seat_no'];
  $sem=$_SESSION['sem'];
  $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester IN (5,6) ORDER BY course_list_bsse.semester ASC ";
  # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($link, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable">
      <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows( $selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
          $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];
        }
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>
</div>
 <div class="InformationDiv4">

<h1 class="less">Fourth Year Results</h1>


    <!-- VIEW RESULTS SECTION-->
  <?php
  $seat_no=$_SESSION['seat_no'];
  $sem=$_SESSION['sem'];
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
    $selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester IN (7,8) ORDER BY course_list_bsse.semester ASC ";
  # Execute the SELECT Query
  if( !( $selectRes = mysqli_query($link, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable">
      <thead>
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows( $selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
          $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];
        }
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>
</div>
<div class="InformationDiv5">
    <h1 class="less">Complete Results</h1>
  <?php
  $seat_no=$_SESSION['seat_no'];
  $sem=$_SESSION['sem'];
    #Prepare the SELECT Query
//    $selectSQL = "SELECT * FROM bsse_b15_res WHERE seat_no='$seat_no' AND semester<'$sem' ORDER BY semester DESC ";
    $selectSQL="SELECT bsse_b15_res.course_id,bsse_b15_res.total_marks,bsse_b15_res.marks_obt, course_list_bsse.semester, course_list_bsse.course_name FROM bsse_b15_res INNER JOIN course_list_bsse ON bsse_b15_res.course_id=course_list_bsse.course_id WHERE bsse_b15_res.seat_no='$seat_no' AND course_list_bsse.semester<'$sem' ORDER BY course_list_bsse.semester DESC ";
  # Execute the SELECT Query
     $link = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($link);
   
  if( !( $selectRes = mysqli_query($link,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
  <table border="2" id="myTable" >
      <thead class="tr1">
      <tr>
        <th>Course ID</th>
        <th>Course Name</th>
        <th>Total Marks</th>
        <th>Marks Obtained</th>
      </tr>
      </thead>
      <tbody>
      <?php
        if( mysqli_num_rows($selectRes )==0 ){
          echo '<tr><td colspan="4">No Rows Returned</td></tr>';
        }
        else{
          $prevSem=NULL;
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          if($prevSem!=($row['semester']) || $prevSem==NULL){
            echo "<tr style=\"border:0; background-color:#000; color: #fff;\"><th colspan=\"4\"><h3  align=\"center\" style=\"margin:0;\"><b>Semester : {$row['semester']}<b></h3></th></tr>";
          }
            echo "<tr><td>{$row['course_id']}</td><td>{$row['course_name']}</td>";
            if($row['marks_obt']==0){
              echo "<td>{$row['total_marks']}</td><td>Upload pending...</td></tr>\n";   
            }
            else{
              echo "<td>{$row['total_marks']}</td><td>{$row['marks_obt']}</td></tr>\n";
            }
          $prevSem=$row['semester'];
        }
      }
    ?>
    </tbody>
  </table>

 <?php
  }

?>

</div>
<div class="InformationDiv6">
    <h1>Complete Profile</h1>
    <ul>
 
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="file"></span>FULL NAME:
              <?php echo $_SESSION['username']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="shopping-cart"></span> SEAT.NO:
             <!--Class Year -->
             <?php echo $_SESSION['seat_no']; ?>

            </a>

          </li>
            <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="users"></span>
               YEAR: 4th 
             <!--Section -->
             
            </a>
          </li>
              <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text" >
              <span data-feather="users"></span>
             SEMESTER :
             <?php echo $_SESSION['sem']; ?>th
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="cursor: text">
              <span data-feather="users"></span>
              SECTION : 
             <!--Section -->
             <?php echo $_SESSION['sec']; ?>
            </a>
          </li>
         
        </ul>

<br>
<br>
<br>
</div>

</center>
      <canvas class="my-4 w-100" id="myChart" width="900" height="180"></canvas>
   
      
    </main>

</div></div>

          
       


              
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">

 <h1 class="text-warning text-center" >Academic Calender</h1>

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



<?php include 'fileLogic.php';?>

<center>
<table border="2" cellpadding="10px" style="border-color: grey">
  <thead class="tr1">
    <th>ID</th>
    <th>Filename</th>
    <th>size (in KB)</th>
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
</center>
    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       
          
       
          
       
       

     </div>   

              
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">

 <h1 class="text-warning text-center" >Examination Schedule</h1>


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
 

<?php include 'fileLogic2.php';?>

<center>
<table border="2" cellpadding="10px" style="border-color: grey">
  <thead class="tr1">
    <th>ID</th>
    <th>Filename</th>
    <th>size (in KB)</th>
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
</center>
    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       
          
       
          
       
       

     </div>   

              
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="myModalLabel">
                 <h1 class="text-warning text-center" >Improtant Announcement</h1>
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


<?php include 'fileLogic3.php';?>

<center>
<table border="2" cellpadding="10px" style="border-color: grey">
  <thead class="tr1">
    <th>ID</th>
    <th>Filename</th>
    <th>size (in KB)</th>
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
</center>
    </div>
    
 
 </div>

          
                            </div>
                   
                     
               
            </div>
        </div>
    </div>
</div>

</div></div></div>
          
       
       
          
       
          
       
       

     </div>   

  <script type="text/javascript">
  $('#myModal').modal('show');
  $('#myModal8').modal('show');
   $('#myModal2').modal('show');
    $('#myModal3').modal('show');
 </script>
  <script type="text/javascript">
          function myfunc1()
          {
            $(".Information").hide(1000);
            $(".InformationDiv2").hide();
            $(".InformationDiv3").hide();
             $(".InformationDiv4").hide();
             $(".InformationDiv5").hide();
  $(".none").hide();
          $(".InformationDiv1").slideDown(500);

        }
 
         function myfunc2()
          {
             $(".Information").hide(1000);
              $(".InformationDiv1").hide();
               $(".InformationDiv3").hide();
                $(".InformationDiv4").hide();
                  $(".none").hide();
                          $(".InformationDiv5").hide();
          $(".InformationDiv2").slideDown(500);

        }
         function myfunc3()
          {
             $(".Information").hide(1000);
               $(".none").hide();
              $(".InformationDiv1").hide();
               $(".InformationDiv2").hide();
                $(".InformationDiv4").hide();
                          $(".InformationDiv5").hide();
          $(".InformationDiv3").slideDown(500);
        }

 function myfunc4()
          {
             $(".Information").hide(1000);
               $(".none").hide();
              $(".InformationDiv1").hide();
               $(".InformationDiv2").hide();
                $(".InformationDiv3").hide();
                          $(".InformationDiv5").hide();
          $(".InformationDiv4").slideDown(500);
        }
        function myfunc5()
          {
             $(".Information").hide(1000);
              $(".InformationDiv1").hide();
                $(".none").hide();
               $(".InformationDiv2").hide();
                $(".InformationDiv3").hide();
             $(".InformationDiv4").hide();
          $(".InformationDiv5").slideDown(500);
        }
           function myfunc6()
          {
              $(".Information").hide(1000);
               $(".none").hide();
              $(".InformationDiv1").hide();
               $(".InformationDiv2").hide();
                $(".InformationDiv3").hide();
                  $(".InformationDiv4").hide();
                          $(".InformationDiv5").hide();
          $(".InformationDiv6").show();
        }
        </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
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

      </body>
</html>

