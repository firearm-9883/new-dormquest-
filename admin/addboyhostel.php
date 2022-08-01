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
<div class="container mt-5"  style="margin-left:100px;margin-bottom:30rem;">
    <div class="alert-success" style="margin-top:200px;background-color:transparent;margin-left:200px;font-size:15px;">
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
                         <h2 style="text-align:center;">ADD BOYS HOSTEL</h2>
                           <form action="actionhostel.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                     <label for="address" class="label">location</label>
                                     <input type="text"name="address" id="address" placeholder="location" class="form-control">
      
                                     <label for="hostel_name" class="label">Name</label>
                                     <input type="text"name="hostel_name" id="hostel_name" placeholder="hostel name" class="form-control">
  
                                     <label for="price" class="label">Price</label>
                                     <input type="text" name="price"id="price" placeholder="hostel price" class="form-control">
                                      
                                     <
                                     <label for="hostel_image" class="label" accept="hostel_image.jpeg,hostel_image.jpg,hostel_image.png,hostel_image.jfif">Images</label>
                                     <input type="file" name="hostel_image"id="hostel_image" class="form-control">
                                </div>

                                    <input type="submit" value="add" name="submit" class="btn btn-primary" >

                            </form>
         </div>   
  </div>             
</body>
</html>