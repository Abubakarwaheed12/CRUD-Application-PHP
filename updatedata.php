<?php
    $stu_id=$_POST['sid'];
     $stu_name=$_POST['sname'];
    $stu_address=$_POST['saddress'];
    $stu_class=$_POST['sclass'];
    $stu_sphone=$_POST['sphone'];

        $conn=mysqli_connect("localhost","root","","crud") or die("DATABASE NOT CONNECT");
        $sql="UPDATE students SET sname='{$stu_name}', saddress='{$stu_address}',scourse='{$stu_class}',sphone='{$stu_sphone}' WHERE sid='{$stu_id}'";
        $result=mysqli_query($conn, $sql) or die("query unsuccessfull");
        header("Location: http://localhost/PHP FULL/crud_php/index.php");
        mysqli_close($conn);
?>