<?php
    include 'dbconnection.php';
session_start();
    // var_dump($conn); die();

//add user action
    if(isset($_POST['submit'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql = "INSERT INTO user_info (email, password,firstname,lastname) VALUE ( '$email', '$password','$firstname','$lastname')";

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

    if(isset($_POST['display'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user_id=$_POST['user_id'];

        $sql = "UPDATE user_info
                    SET firstname = '$firstname',
                    lastname = '$lastname',
                    email = '$email',
                    password = '$password'
                    WHERE user_id = $user_id ";

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

    //delete user action

    if(isset($_POST['result'])){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user_id=$_POST['user_id'];

        $sql = "DELETE FROM  user_info
                    WHERE user_id = $user_id ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "User deleted Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);
    }
?>