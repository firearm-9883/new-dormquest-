<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="forms.css">
    
<?php
include 'dbconnection.php';

if(isset($_POST["submit"])){  
  // var_dump($_POST); die();

  
if(!empty($_POST['admin_name']) && !empty($_POST['admin_email'])&&!empty($_POST['admin_password'])) {  
    $admin_name=$_POST['admin_name'];
    $admin_email=$_POST['admin_email'];  
    $admin_password=$_POST['admin_password'];  
  
  
    $query=mysqli_query($conn, "SELECT * FROM admin WHERE admin_name='$admin_name'AND admin_email='$admin_email' AND admin_password='$admin_password'");   
    $numrows=mysqli_num_rows($query);  
    if($numrows==1)  
    {  
      while($row=mysqli_fetch_assoc($query)){  
        $_SESSION['admin_id']=$row['admin_id'];
        $_SESSION['admin_name']=$row['admin_name'];  
      }
      header("Location: dashboard.php");   
    } else {  
    echo "Invalid email or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
mysqli_close($conn);
}  
?>   
<section class='login' id="login">
  <div class='head'>
  <h1 class='company'>Welcome Admin</h1>
</div>
<div>
  <h2 style="text-align:center">PLEASE LOGIN</h2>
</div>
  <div class='form'>
    <form action="" novalidate method="post">
                <div>
                  <input type="text" placeholder='username' class='text' name="admin_name"id='admin_name' required><br>
                  <span id="Username" style="color:red; font-size:12px"></span>  
                </div>


                <div>
                  <input type="email" placeholder='email' class='email' id="admin_email" name="admin_email"><br>
                  <span id="Email"style="color:red; font-size:12px"></span>
                </div>

                <div>
                  <input type="password" placeholder='password' class='password'id="admin_password" name="admin_password"><br>
                  <span id="Password"style="color:red; font-size:12px"></span>
                </div>

                <div>
                  <input type="submit" name="submit" class='btn-login' id='do-login'>
              </div>
        </form>

</body>
</html>