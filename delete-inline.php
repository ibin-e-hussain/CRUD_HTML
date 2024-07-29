<?php

echo $stu_id=$_GET['id'];

$conn=mysqli_connect("localhost","root","","Crud") or die("connection failed");
$query="DELETE from students WHERE Id={$stu_id}";
$result=mysqli_query($conn,$query)or die("query unsuccessfull");

header("location:index.php");
mysqli_close($conn);
?>