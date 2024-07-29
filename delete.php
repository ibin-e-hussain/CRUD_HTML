<?php include 'header.php'; 

if(isset($_POST['deletebtn'])){
    $conn=mysqli_connect("localhost","root","","Crud") or die("connection failed");
    $stu_id=$_POST['sid'];
    $query="DELETE from students WHERE Id={$stu_id}";
$result=mysqli_query($conn,$query)or die("query unsuccessfull");
header("location:index.php");
mysqli_close($conn);
}
?>



<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
