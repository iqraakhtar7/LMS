<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>-->

</head>
<body>

  <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display MESSAGE </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr style="background-color: #343a40; color: white; text-align: center;">
 
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
 <td> <button style="background-color: #007bff; color: white; padding: 6px 16px; border: 1px solid #007bff;  border-radius: 5px"> <a style="text-decoration: none;" href="#" class="text-white"> REPLY </a> </button> </td>

  </tr>

  <?php 
 }
  ?>
 
 </table>  

  </div>
 </div>

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>