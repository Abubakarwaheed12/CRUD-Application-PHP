<?php
     $stu_name=$_POST['sname'];
    $stu_address=$_POST['saddress'];
    $stu_class=$_POST['class'];
    $stu_sphone=$_POST['sphone'];

        $conn=mysqli_connect("localhost","root","","crud") or die("DATABASE NOT CONNECT");
        $sql="INSERT INTO students (sname,saddress,scourse,sphone)
        VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_sphone}')";
        $result=mysqli_query($conn,$sql) or die("UNSUCCESSFUL QUERY");

        header("Location: http://localhost/PHP FULL/crud_php/index.php");
        mysqli_close($conn);
?>