<?php
      $database="dormquest";
      $localhost="localhost";
      $user="root"; 
      $password="1234";
      $conn=mysqli_connect($localhost,$user,$password,$database); 
      if(!$conn){
        die("connection failed:".mysqli_connect_error());
      }else{
       echo "";
      }
?>