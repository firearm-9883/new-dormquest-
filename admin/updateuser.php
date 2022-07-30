<?php
session_start();
include 'dbconnection.php';
include 'include/header.php';

if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];

    $sql = "SELECT * FROM user_info WHERE user_id = $user_id";

    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
    }

    ?>
 <div class="container mt-5"style="background:linear-gradient(45deg, #666, #b59fc4);">
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

    <h2 style="margin-left:100px;margin-top:45px;">Update Users</h2>

     <form action="action.php" method="post" style="margin-left:40px;margin-top: 20px;height:504px;margin-bottom:18px;">
         <div class="form-group">
             <input type="hidden" name="user_id" value ="<?php echo $row['user_id'] ?>">

             <label for="firstname">User name</label>
             <input type="text" name="firstname" class="form-control" id="firstname" value ="<?php echo $row['firstname'] ?>">
         </div>
         <div class="form-group">
             <label for="lastname">Lastname</label>
             <input type="text" name="lastname" class="form-control" id="lastname" value ="<?php echo $row['lastname'] ?>">
         </div>
         <div class="form-group">
             <label for="email">Email</label>
             <input type="email" name="email" class="form-control" id="email" value ="<?php echo $row['email'] ?>">
         </div>
         <div class="form-group">
             <label for="password">Password</label>
             <input type="password" name="password" class="form-control" id="password" value ="<?php echo $row['password'] ?>">
         </div>
     
         <button class="btn btn-primary" type="submit" name="display" value="update">Update</button>
         <div><a href="edituser.php" style="color:black;margin-left:6rem;margin-top:8rem;text-decoration:none;font-size:20px;"><i class="fa fa-arrow-left" aria-hidden="true" style="color:white;">GO BACK</i></a></div>
 </div>
    </form>
 </div>
 <?php
}
?>
</body>
</html>