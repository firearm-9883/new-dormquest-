<?php
   include 'dbconnection.php';
    session_start();
 

    // var_dump($conn); die();

//add hostel action
    if(isset($_POST['submit'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $hostel_image=$_FILES['hostel_image'];
       $filename=$hostel_image['name'] ;
       $filetemp=$hostel_image['tmp_name'];

       $destinationfile='upload/'.$filename;
       move_uploaded_file($filetemp,$destinationfile);
       

        $sql = "INSERT INTO boy_hostel (address,hostel_name,price,hostel_image) VALUES ( '$address', '$hostel_name','$price','$destinationfile')";

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

    if(isset($_POST['update'])){
        $address=$_POST['address'];
        $hostel_name=$_POST['hostel_name'];
        $price=$_POST['price'];
        $boy_hostel_id=$_POST['boy_hostel_id'];

        $sql = "UPDATE boy_hostel
                    SET address = '$address',
                    hostel_name = '$hostel_name',
                    price = '$price'
                    WHERE boy_hostel_id=$boy_hostel_id";

       var_dump($sql); die();

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
        $hostel_image=$_FILE['hostel_image'];
        $boy_hostel_id=$_POST['boy_hostel_id'];

        $sql = "DELETE FROM  boy_hostel
                    WHERE boy_hostel_id=$boy_hostel_id";

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
        

        $sql = "INSERT INTO girl_hostel (address,hostel_name,price,hostel_image) VALUES ( '$address', '$hostel_name','$price','$destinationfile')";

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
        $hostel_image=$_FILE['hostel_image'];
        $girl_hostel_id=$_POST['girl_hostel_id'];
     
 
        $sql = "UPDATE girl_hostel
                    SET address = '$address',
                    hostel_name = '$hostel_name',
                    price = '$price',
                    hostel_image= '$destinationfile'
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
        $hostel_image=$_FILE['hostel_image'];
        $girl_hostel_id=$_POST['girl_hostel_id'];
       
      
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