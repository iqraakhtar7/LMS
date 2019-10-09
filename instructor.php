<?php session_start(); 
  if(isset($_SESSION['ins_id'])){}
    else{
      echo "<script>alert('I m in if');</script>";
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
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Teacher profile</a>
  
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
            <a class="nav-link active" href="instructor.php">
              <span data-feather="home"></span>
              Dashboard<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
             ID:  <?php echo $_SESSION['ins_id']; ?>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              <?php echo $_SESSION['username']; ?>
            </a>
          </li>
             
         
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Active Courses</span>
          <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Course List
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Upload Result 
            </a>
          </li>
          
           <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Upload Attendance 
            </a>
          </li>
          
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 qq" style="background-image: url(images/search_background1.png); background-repeat: no-repeat; background-size: cover;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
          </div>
       <div class="Information">
       	<div class="academic">
       		<h3>Course List</h2>
<?php

    
    include 'conn.php';

    $teacher_id=$_SESSION['ins_id'];

    $con = mysqli_connect("localhost", "root", "", "dcs-ubit") or die($con);
?>
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
  


//  $selectSQL= "SELECT * FROM teach_courses WHERE teacher_id='$teacher_id'";
  if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <center>
  <table border="2" class="myTable" style="font-size: 20px; ">
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
              
              <td><a ><?php echo $row['class_id'] ?></a></td>
              <td><a ><?php echo $row['program'] ?></a></td>
              <td><a ><?php echo $row['shift'] ?></a></td>
              <td><a ><?php echo $row['sec'] ?></a></td>
              <td><a ><?php echo $course_id ?></a></td>
              <td><a ><?php echo $course_name ?></a></td>
            </tr>      

           <?php $id++;                        
        }
      }
    ?>
    </tbody>
  </table></center>
<?php
  }

?>
       	</div>
       	<div class="personal">
          <br>

       		<h3>Upload Result</h2>
 <h5>Click On below to upload results.</h5>
 <br>
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
  


//  $selectSQL= "SELECT * FROM teach_courses WHERE teacher_id='$teacher_id'";
  if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <center>
  <table border="2" class="myTable" style="font-size: 20px; ">
      <thead>
      <tr style="background-color:#fff; color: #000;">
        <th style="padding:5px;">Class ID</th>
      
        <th style="padding:5px;">Section</th>
        <th style="padding:5px;">Course ID</th>
        <th style="padding:5px;">Course Name</th>
         <th style="padding:5px;">Action</th>
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
              
              <td><a ><?php echo $row['class_id'] ?></a></td>
              
              <td><a><?php echo $row['sec'] ?></a></td>
              <td><a ><?php echo $course_id ?></a></td>
              <td><a ><?php echo $course_name ?></a></td>
              <td><a href="upload_task.php?id=<?=$id?>">Upload Result</a></td>
              
            </tr>    

           <?php $id++;                        
        }
      }
    ?>
    </tbody>
  </table></center>

  <?php
  }

?>
            <br>
           
       	</div>
          <div class="personal">
          <br>
          <h3>Upload Attendance</h2>
          
            
<br>
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
  


//  $selectSQL= "SELECT * FROM teach_courses WHERE teacher_id='$teacher_id'";
  if( !( $selectRes = mysqli_query( $con, $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysqli_errno($con).': '.mysqli_error($con);
  }else{
    ?>
    <center>
  <table border="2" class="myTable" style="font-size: 20px; ">
      <thead>
      <tr style="background-color:#fff; color: #000;">
        <th style="padding:5px;">Class ID</th>
      
        <th style="padding:5px;">Section</th>
        <th style="padding:5px;">Course ID</th>
        <th style="padding:5px;">Course Name</th>
         <th style="padding:5px;">Action</th>
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
              
              <td><a ><?php echo $row['class_id'] ?></a></td>
             
              <td><a ><?php echo $row['sec'] ?></a></td>
              <td><a ><?php echo $course_id ?></a></td>
              <td><a ><?php echo $course_name ?></a></td>
 <td><a href="attendance.php?id=<?=$id?>" >Upload Attendance</a></td>
             
            </tr>             
           <?php $id++;                        
        }
      }
    ?>
    </tbody>
  </table></center>

  <?php
  }

?>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      
    </main>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script></body>
</html>

