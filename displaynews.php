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
 <h1 class="text-warning text-center" > Display NEWS </h1>
 <br>
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

  <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>