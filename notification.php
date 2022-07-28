<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if(true || !empty($_POST["submit"])){ 
 
    $mail = new PHPMailer(true);
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;DEBUG_OFF ;
    // - STARTTLS (explicit TLS on port 587)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;

    //Username to use for SMTP authentication - use full email address for gmail
    $mail->Username = 'bhawana.shrestha@apexcollege.edu.np';

    //Password to use for SMTP authentication
    $mail->Password = 'Bhawana@stha1133';

    $firstname=$_POST["firstname"];
    $lastname=$_POST["lastname"];
    $email=$_POST["temail"];
    $phoneno=$_POST["phoneno"];
    $rooms=$_POST["rooms"];
    $beds=$_POST["beds"];
    $checkdate=$_POST["checkdate"];
    $gender=$_POST["gender"];
    $sRequest=$_POST["sRequest"];
    $toEmail=$_POST["temail"];


     //Recipients
     $mail->setFrom('bhawana.shrestha@apexcollege.edu.np', 'Mailer');
     $mail->addAddress('bhawanastha9999@gmail.com', 'bhawana User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
     $mail->addReplyTo('info@example.com', 'Information');
     //$mail->addCC('cc@example.com');
     //$mail->addBCC('bcc@example.com');
 
     //Attachments
     //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
     //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
 
     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Here is the subject';
     $mail->Body    = "First Name:".$firstname."\n"."Last Name:".$lastname."\n"."Email:".$email."\n"."Phone No:".$phoneno."\n"."No of Rooms:".$rooms."\n"."No of Beds:".$beds."\n"."Check in Date:".$checkdate."\n"."Gender:".$gender."\n\n"."Special Request:".$sRequest."\n"."\n\n";
     $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
 
    // $mail->send();

    $mail->Subject  =  'Test Subject';
    $mail->IsHTML(true); 
    $mail->Body    = 'Your Message Body';
    if ($mail->send()) {
         echo "Message sent!";
    } else {
        echo "Error: " . $mail->ErrorInfo;
    }
    die('test');


    $subject="Booking Form Submission";
    $mailBody="First Name:".$firstname."\n"."Last Name:".$lastname."\n"."Email:".$email."\n"."Phone No:".$phoneno."\n"."No of Rooms:".$rooms."\n"."No of Beds:".$beds."\n"."Check in Date:".$checkdate."\n"."Gender:".$gender."\n\n"."Special Request:".$sRequest."\n"."\n\n";


    if(mail( $toEmail,$subject, $mailBody)){
        $message= "<h2>Booking Successfully!!" ."  ".$firstname.",Your booking has been Confirmed, we will contact you soon.</h2>";
    }
    else{
        echo "Somethig went wrong!";
    }

     
     

}
?>


