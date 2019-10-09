<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `news` WHERE id = $id ";

mysqli_query($con, $q);

header('location:displaynews.php');

?>