<?php
require("PHPMailer/class.phpmailer.php");
require("PHPMailer/PHPMailerAutoload.php");
include_once('connectdb.php');

$idroom = $_REQUEST['idroom'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$checkin = $_REQUEST['checkin'];
$checkout = $_REQUEST['checkout'];
$people = $_REQUEST['people'];


echo $idroom."/".$name."/".$phone."/".$email."/".$checkin."/".$checkout."/".$people;

$strSQL = "INSERT INTO `booking` (`ID_booking`, `ID_room`, `names`, `phone`, `email`, `checkin`, `checkout`, `number_guest`, `status`) 
           VALUES (NULL, '$idroom', '$name', '$phone', '$email', '$checkin', '$checkout', '$people', '1');";
            
	$objQuery = mysqli_query( $con, $strSQL );
		if ( $objQuery === TRUE ) {
            $last= "SELECT ID_booking FROM booking ORDER BY ID_booking DESC LIMIT 1" ;
            $re = mysqli_query( $con, $last );
            $ss=mysqli_fetch_assoc( $re );
             
                //----------------------- LINE-------------------------------------------------
        $Token = "IXxOexVmGr05YqqZbMeKEg1KjcaZKSGOEygJs9GaJ9o";
        $message = "ID booking  :".$ss['ID_booking']."\nคุณ :".$name." \nได้จองห้องประเภท: ".$idroom."\nจำนวนเข้าพัก: ".$people."คน\nเข้าพัก: ".$checkin."\nติดต่อ: ".$phone."\nE-mail: ".$email;
        
        
        
            $lineapi = $Token; // ใส่ token key ที่ได้มา
            $mms =  trim($message); // ข้อความที่ต้องการส่ง
            date_default_timezone_set("Asia/Bangkok");
            $chOne = curl_init(); 
            curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
            // SSL USE 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
            curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
            //POST 
            curl_setopt( $chOne, CURLOPT_POST, 1); 
            curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=$mms"); 
            curl_setopt( $chOne, CURLOPT_FOLLOWLOCATION, 1); 
            $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$lineapi.'', );
                curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
            curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
            $result = curl_exec( $chOne ); 
            //Check error 
            if(curl_error($chOne)) 
            { 
                   echo 'error:' . curl_error($chOne); 
            } 
            else { 
            $result_ = json_decode($result, true); 
               echo "status : ".$result_['status']; echo "message : ". $result_['message'];
                } 
            curl_close( $chOne );   
       
//------------------------------------end LINE----------------------------------------------

//-------------------------------mail---------------------------------------------
$mail = new PHPMailer();

$body = $message;

$mail->CharSet = "utf-8";
 //Tell PHPMailer to use SMTP
        //$mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
$mail->Username = "mommam3937@gmail.com"; // account SMTP
$mail->Password = "Mommam333"; // รหัสผ่าน SMTP

$mail->SetFrom("mommam3937@gmail.com");
$mail->Subject = "Thechic Lipe";

$mail->MsgHTML($body);

$mail->AddAddress("mommam3937@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

//-------------------------end mail--------------------------------------------





          //  echo "<script> alert('เพิ่มเรียบร้อยแล้ว! ');window.location.href='index.php'</script>";
            


		} else {
        echo "<script> alert('ผิดพลาด โปรดตรวจสอบข้อมูล');</script>";
                       
		}

?>