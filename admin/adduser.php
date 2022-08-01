<?php
include 'dbconnection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="Adminform.css">
  <link href="dist/css/style.css" rel="stylesheet" />
</head>
<body>
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
<div class="container mt-5"  style="margin-left:40px;margin-top: 20px;height:504px;margin-bottom:18px;">
    <div class="alert-success" style="margin-top:20px;background-color:transparent;margin-left:200px;font-size:15px;">
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

            <div id="page-content-wrapper">
             
                
                         <h2 style="text-align:center;">ADD USER</h2>
                           <form action="action.php" method="POST">
                                <div class="form-group">
                                     <label for="firstname" class="label"> Name</label>
                                     <input type="text"name="firstname" id="firstname" placeholder="enter firstname" class="form-control">
      
                                     <label for="lastname" class="label"> Last Name</label>
                                     <input type="text"name="lastname" id="lastname" placeholder="enter lastname" class="form-control">
                                
                                     <label for="email" class="label">Email</label>
                                     <input type="email"name="email" id="email" placeholder="enter email" class="form-control">
  
                                     <label for="password" class="label">Password</label>
                                     <input type="password" name="password"id="password" placeholder="password" class="form-control">
                                </div>

                                    <input type="submit" value="add" name="submit" class="btn btn-primary" >

                            </form>
         </div>   
  </div>             
</body>
</html>