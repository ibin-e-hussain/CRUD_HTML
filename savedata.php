<?php

echo $stu_name=$_POST['sname'];
$stu_add=$_POST['saddress'];
$stu_class=$_POST['class'];
$stu_phone=$_POST['sphone'];



// connection
$conn=mysqli_connect("localhost","root","","Crud") or die("connection failed");
$query="INSERT INTO `students`(`Name`, `Address`, `Class`, `Phone`) VALUES ('$stu_name','$stu_add','$stu_class','$stu_phone')";
echo $query;
$result=mysqli_query($conn,$query)or die("query unsuccessfull");

// redirect to index page
header("location:index.php");
mysqli_close($conn);
?>

