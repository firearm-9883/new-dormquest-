<?php
    include 'dbconnection.php';
session_start();
    // var_dump($conn); die();

//add hostel action
    if(isset($_POST['submit'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "INSERT INTO boy_hostel (address,hostel_name,price,hostel_image) VALUE ( '$address', '$hostel_name','$price','$hostel_image')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "hostel added Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);

    }

//update hostel action

    if(isset($_POST['display'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "UPDATE boy_hostel
                    SET address = '$address',
                    hostel_name = '$hostel_name',
                    price = '$price',
                    hostel_image= '$hostel_image'
                    WHERE boy_hostel_id = $boy_hostel_id ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Hostel updated Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);
    }

    //delete hostel action

    if(isset($_POST['result'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "DELETE FROM  boy_hostel
                    WHERE boy_hostel_id = $boy_hostel_id ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Hostel deleted Successfully";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);
    }
?>
<?php
    include 'dbconnection.php';
session_start();
    // var_dump($conn); die();

//add user action
    if(isset($_POST['submit'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "INSERT INTO girl_hostel (address,hostel_name,price,hostel_image) VALUE ( '$address', '$hostel_name','$price','$hostel_image')";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Hostel added ";
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
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "UPDATE girl_hostel
                    SET address = '$address',
                    hostel_name = '$hostel_name',
                    price = '$price',
                    hostel_image= '$hostel_image'
                    WHERE girl_hostel_id = $girl_hostel_id ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Hostel updated ";
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
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_POST['hostel_image'];

        $sql = "DELETE FROM  girl_hostel
                    WHERE girl_hostel_id = $girl_hostel_id ";

        if(mysqli_query($conn, $sql)){
            $_SESSION['success'] = "Hostel deleted";
            header("Location:".$_SERVER['HTTP_REFERER']);
        }

        else{
            $_SESSION['error'] = mysqli_error($conn);
            header("Location:".$_SERVER['HTTP_REFERER']);

        }

        mysqli_close($conn);
    }
?>