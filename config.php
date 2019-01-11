<?php
/**
 * Created by PhpStorm.
 * User: nando
 * Date: 11.01.2019
 * Time: 13:53
 */
//setcookie("sig", "value", time()+(86400 * 30)); //86400 = 1 day
function sendMail($sender, $to, $cc, $subject, $message){

    if(isset($_COOKIE['sig'])){
        $message.=$_COOKIE['sig'];
    }
// Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
    $headers .= "From: <$sender>" . "\r\n";
    $headers .= "Cc: $cc" . "\r\n";

    mail($to,$subject,$message,$headers);
}

