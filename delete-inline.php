<?php
 $stu_id=$_GET['id'];
 include 'config.php';
$sql="DELETE FROM students WHERE sid={$stu_id}";
$result=mysqli_query($conn, $sql) or die("query unsuccessfulll");

header("Location: http://localhost/php full/crud_php/index.php");

mysqli_close($conn);
?>