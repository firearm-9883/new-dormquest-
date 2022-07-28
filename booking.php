<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <title>Booking form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='bookingform.css'>
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">-->
  <script type="text/javascript">
 function Form_validation(){
  
	  var f_name=document.getElementById('fname').value;
		var l_name=document.getElementById('lname').value;
		var f_email=document.getElementById('temail').value;
    var f_phone=document.getElementById('phoneno').value;
		if(f_name ==""){
			document.getElementById('First_name').innerHTML="Please Fill The First Name!!";
			return false;
    }
    if(!isNaN(f_name)){
			document.getElementById('First_name').innerHTML="Only Characters Are Allowed!!";
			return false;
  }
    else{
			document.getElementById('First_name').innerHTML="";

    }
    


		if(l_name ==""){
			document.getElementById('Last_name').innerHTML="Please Fill The Last Name!!";
			return false;
		}
    if(!isNaN(l_name)){
			document.getElementById('Last_name').innerHTML="Only Characters Are Allowed!!";
			return false;
		}else{
			document.getElementById('Last_name').innerHTML="";

    }

	

			if(f_email ==""){
			document.getElementById('Email').innerHTML="Please Fill The First Name!!";
			return false;
		}
		if(f_email.indexOf('@')<= 0){
			document.getElementById('Email').innerHTML="Invalid Email!!";
			return false;
		}
		if((f_email.charAt(f_email.length-4)!='.') && (f_email.charAt(f_email.length-3)!='.')){
			document.getElementById('Email').innerHTML="Invalid Email !!";
			return false;
		}else{
			document.getElementById('Email').innerHTML="";

    }



    if(f_phone ==""){
			document.getElementById('Phone_no').innerHTML="Please Fill The Phone No!!";
			return false;
		}
		if(isNaN(f_phone)){
			document.getElementById('Phone_no').innerHTML="Only Digits Are Allowed!!";
			return false;
		}
		if(f_phone.length!=10){
			document.getElementById('Phone_no').innerHTML="Mobile No Must Be 10 Digit Long!!";
			return false;
		}else{
			document.getElementById('Phone_no').innerHTML="";

    }
	}
  
	</script>

</head>
<body>

    <div class="container">
    <div class="title">Booking Form</div>
    <form action="notification.php" onsubmit="return Form_validation()" novalidate method="post">
        <div class="user_details">
            <table>
        <tr>
        <td>
        <div class="input_box">
        <span  class="details">First Name</span>
        <input type="text" id="fname" name="fname" placeholder="Enter your name" autocomplete="off">
		<span id="First_name" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    <td>


                    <div class="input_box">
        <span class="details">Last Name</span>
        <input type="text" name="lname" id="lname"  placeholder="Enter your username" required>
		<span id="Last_name" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    </tr>


    <tr>
    <td><div class="input_box">
        <span class="details">Email</span>
        <input type="text" name="temail" id="temail" placeholder="Enter your email" required="">
		<span id="Email" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    <td><div class="input_box">
        <span class="details">Phone no</span>
           <input type="text" name="phoneno" id="phoneno" placeholder="Enter your Phone no" required="">
		   <span id="Phone_no" class="text_error" style="color:red; font-size:12px"></span>
    </div>
    </td>
    </tr>
    <tr>
    <td>


                        <div class="input_box">
            <span class="details">No of Rooms</span>
        <select name="rooms" class="room_select">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
        <option value="four">Four</option>
        <option value="five">Five</option>
        </select>
    </div>
    </td>
    <td>


                        <div class="input_box">
        <span class="details">No of Beds</span>
        <select name="beds" class="bed_select">
        <option value="one">One</option>
        <option value="two">Two</option>
        <option value="three">Three</option>
        <option value="four">Four</option>
        <option value="five">Five</option>
        </select>
    </div>
    </td>
    </tr>
            <tr>
      <td>
                    <div class="input_box">
        <span class="details">Check In Date</span>
        <input type="date" required="">
    </div>
    </td>
    </tr>
    </table>
    </div>

    <div class="gender_details">
    <input type="radio" name="gender" id="dot_1">
    <input type="radio" name="gender" id="dot_2">
    <input type="radio" name="gender" id="dot_3">
    <span class="gender_title">Gender</span>
    <div class="category">
    <label for="dot_1">
    <span class="dot one"></span>
    <span class="gender">Male</span>
    </label>
    <label for="dot_2">
    <span class="dot two"></span>
    <span class="gender">Female</span>
    </label>
    <label for="dot_3">
    <span class="dot three"></span>
    <span class="gender">Prefer not to say</span>
    </label>
    </div>
    </div><br><br>

      <div class="text_box">
        <span class="text_box">Special Request</span>
        <textarea name="text" placeholder="Your Request"></textarea>
    </div>
    <div class="button">
    <input type="submit" value="Book" >
    </div>
        </form>
</div>
<?php
include 'signupform.php';

/*$conn=mysqli_connect('localhost', 'root','root' );
if($conn){
    echo"connection successful";
}else{
    echo"no connection";
}
mysqli_select_db($conn,'booking');
$fname=$_POST['fname'];
$fname=$_POST['lname'];
$fname=$_POST['temail'];
$fname=$_POST['phoneno'];
$fname=$_POST['rooms'];
$fname=$_POST['beds'];
$fname=$_POST['gender'];
$fname=$_POST['text'];
$query="insert into table_name(fname,lname,temail,phoneno,rooms,beds,gender,text)
values('$fname','$lname','$temail','$phoneno','$rooms','$beds','$gender','$text')";
mysqli_query($conn,$query);
header('location:booking.php');*/

/*
function create_db(){
  $conn=mysqli_connect("localhost","root","root");
if(!$conn){
  die("connection failed:".mysqli_connect_error());
}else{
  echo"connection successfully";
}
$sql=" drop database if exists booking_db";
if(mysqli_query($conn,$sql)){
echo "database created successfully";
}else{
"error creating database;".mysqli_error($conn);
}
mysqli_close($conn);
}*/
function create_table(){
$database="hostel_db";
$conn=mysqli_connect("localhost","root","root",$database);
if(!$conn){
  die("connection failed:".mysqli_connect_error());
}else{
  echo"connection successfully";
}
$sql="CREATE TABLE booking_info(
booking_id int primary key AUTO_INCREMENT,
first_name varchar(30) not null,
last_name varchar(30) not null,
email char(50) not null,
phoneno char(10) not null,
rooms varchar(10) not null,
beds varchar(10) not null,
gender varchar(10) not null,
special_request varchar(80) not null
)";
if(mysqli_query($conn,$sql)){
echo "table created successfully";
}else{
"error creating table;".mysqli_error($conn);
}
mysqli_close($conn);
}
function insert_op(){
$database="hostel_db";
$conn=mysqli_connect("localhost","root","root",$database);
if(!$conn){
  die("connection failed:".mysqli_connect_error());
}else{
  echo"connection successfully";
}
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $temail=$_POST['temail'];
    $phoneno=$_POST['phoneno'];
    $rooms=$_POST['rooms'];
    $beds=$_POST['beds'];
    $gender=$_POST['gender'];
    $text=$_POST['text'];
$sql=mysqli_query($conn,"INSERT INTO booking_info values(1,'$fname','$lname','$email','$pnoneno','$rooms','$beds','$gender','$text')");
if($sql){
echo"success";
}else{
echo "failed";
}
mysqli_close($conn);
}
}

//create_db();
create_table();
insert_op();
?>

	</body>
</html>