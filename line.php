<?php
 $Token = "IXxOexVmGr05YqqZbMeKEg1KjcaZKSGOEygJs9GaJ9o";
        $message = "คุณ มอมแมม ได้จองห้องพักประเภท 3 เข้าพัก 2017-30-12 จำนวน 2 คน ติดต่อ 0910494621 email: mommam3937@gmail.com";
        
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
        
?>