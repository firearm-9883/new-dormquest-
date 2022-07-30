<?php
session_start();
include 'dbconnection.php';
include 'include/header.php';

if(isset($_GET['boy_hostel_id'])){
    $boy_hostel_id = $_GET['boy_hostel_id'];

    $sql = "SELECT * FROM boy_hostel WHERE boy_hostel_id = $boy_hostel_id";

    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
    }
    ?>
    
 <div class="container mt-5" style="background:linear-gradient(45deg, #666, #b59fc4);">
 <div class="alert-success" style="margin-top:200px;background-color:transparent;margin-left:200px;font-size:20px;">
        <?php 
            if(isset($_SESSION['success'])){
                echo $_SESSION['success'];
                $_SESSION['success'] = "";
            }
           

        ?>
    </div>
    <div class="alert-danger"style="background-color:transparent;font-size:15px;margin-left:200px;">
        <?php
         if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            $_SESSION['error'] = "";
        }

       ?>
       </div>
    <h2 style="margin-left:100px;margin-top:45px;">Delete users</h2>

     <form action="actionhostel.php" method="post" style="margin-left:40px;margin-top: 20px;height:504px;margin-bottom:18px;">
         <div class="form-group">
             <input type="hidden" name="boy_hostel_id" value ="<?php echo $row['boy_hostel_id'] ?>">

             <label for="address">Location</label>
             <input type="text" name="address" class="form-control" id="address" value ="<?php echo $row['address'] ?>">
         </div>

         <div class="form-group">
             <label for="hostel_name">Hostel Name</label>
             <input type="text" name="hostel_name" class="form-control" id="hostel_name" value ="<?php echo $row['hostel_name'] ?>">
         </div>
         <div>
         <button class="btn btn-primary" type="submit" name="result" value="delete"style="background-color:red;">Delete</button>

       <div><a href="editboyhostel.php" style="color:black;margin-left:6rem;margin-top:8rem;text-decoration:none;font-size:20px;"><i class="fa fa-arrow-left" aria-hidden="true" style="color:white;">GO BACK</i></a></div>
         </div>
    </form>
 </div>
 <?php
}
?>
</body>
</html>