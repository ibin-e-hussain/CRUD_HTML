<?php
$stu_id=$_POST['sid'];
$stu_name=$_POST['sname'];
$stu_add=$_POST['saddress'];
$stu_class=$_POST['sclass'];
$stu_phone=$_POST['sphone'];



// connection
$conn=mysqli_connect("localhost","root","","Crud") or die("connection failed");
$query="UPDATE students SET Name='{$stu_name}',Address='{$stu_add}',Class='{$stu_class}',Phone='{$stu_phone}' WHERE Id={$stu_id}" or die("query unsuccessfull");
$result=mysqli_query($conn,$query)or die("query unsuccessfull");

// redirect to index page
header("location:index.php");
mysqli_close($conn);
?>