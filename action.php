<?php
    include 'dbconnection.php';

    // var_dump($conn); die();

//add user action
    if(isset($_POST['adduser'])){
        $username=$_POST['username'];
        $useremail=$_POST['email'];
        $userpass=$_POST['passeord'];

        $sql = "INSERT INTO user_info (username, email, password) VALUE ('$username', '$email', '$password')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "User added Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);




    }

//update user action

    if(isset($_POST['updateuser'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $user_id=$_POST['user_id'];

        $sql = "UPDATE user_info
                    SET username = '$username',
                    email = '$email',
                    password = '$pass'
                    WHERE user_id = $userid ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "User updated Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);




    }








?>