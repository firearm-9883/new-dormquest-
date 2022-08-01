<?php 
 session_start();
include 'dbconnection.php';
include 'include/head.php';

$sql = "SELECT * FROM boy_hostel ";
$result = mysqli_query($conn, $sql);

$count=1;

if($result){
?>
<div class="d-flex" id="wrapper">
            <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light"><h1>ADMIN</h1></div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="adduser.php" target="_self">Add user</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="Edituser.php">Users</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="addboyhostel.php">Add Boys Hostel</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="addgirlhostel.php">Add Girls Hostel</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="editboyhostel.php">Boys Hostel</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="editgirlhostel.php">Girls Hostel</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Home</a>
                </div>
            </div>
          <div id="page-content-wrapper">
           <div class="container" style="margin-left:20rem;">
           <table style="margin-top:16rem;">
            <thead>
            <tr>
                <th>S.NO</th>
                <th >location</th>
                <th>Hostel Name</th>
                <th>price</th>
                <th>Images</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>

<?php
//echo mysqli_num_rows($result); die();
    while($row = mysqli_fetch_assoc($result)){
        ?>   
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['hostel_name'] ?></td>

                <td><?php echo $row['price'] ?></td>

                <td><?php echo $row['hostel_image'] ?></td>

                <td><a href="updateboyhostel.php?boy_hostel_id=<?php echo $row['boy_hostel_id']?>" style="text-decoration:none;"><i class="fas fa-edit"></i></a></td>
                    <td><a href="deleteboyhostel.php?boy_hostel_id=<?php echo $row['boy_hostel_id']?>"style="text-decoration:none;color:red;"><i class="fas fa-trash"></i></a></td>
            
            </tr>
       
<?php
            $count++;
   }
   mysqli_close($conn);
?>
     </tbody>
        </table>
    </div>
</div>
</div>
<?php
include 'include/footer.php';
}
?>