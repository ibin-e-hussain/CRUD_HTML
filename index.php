<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>

    <?php
    // connection
    $conn=mysqli_connect("localhost","root","","Crud") or die("connection failed");
    $query="SELECT * FROM students JOIN students_class ON
    students.Class=students_class.cid ";
    $result=mysqli_query($conn,$query)or die("query unsuccessfull");

    if(mysqli_num_rows($result)>0){

    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result)){

            
            ?>
            <tr>
                <td><?php echo $row['Id'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Address'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['Phone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['Id'] ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['Id'] ?>''>Delete</a>
                </td>
            </tr>
           <?php }?>
        </tbody>
    </table>
   <?php } 
   else{
    echo "<h2>No Record Found</h2>";
   }
    mysqli_close($conn);
   ?>
</div>
</div>
</body>
</html>
