<?php
include 'dbconnection.php';
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
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <h2 style="text-align:center">ADD USER</h2>
    <form action="" method="POST">
<div class="form-group">
    <label for="username"> Name</label>
        <input type="text"name="username" id="username" placeholder="enter username" class="form-control">
      
        <label for="email">Email</label>
        <input type="text"name="email" id="email" placeholder="enter email" class="form-control">
  
       <label for="password">Password</label>
        <input type="text" name="password"id="password" placeholder="password" class="form-control">
        </div>


        <input type="submit" value="add" name="submit" class="btn btn-primary" >
    </form>
</body>
</html>