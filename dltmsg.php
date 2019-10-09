<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `contact_email` WHERE id = $id ";

mysqli_query($con, $q);

header('location:admin.php');

?>