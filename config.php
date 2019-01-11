<?php
/**
 * Created by PhpStorm.
 * User: nando
 * Date: 11.01.2019
 * Time: 13:53
 */
$db = new SQLite3("data/fish.db");

//creating all sqlite3 tables
$db->exec("CREATE TABLE IF NOT EXISTS TUser (userName primary key, userPassword, userType);");
$resAdmins = $db->query("select * from TUser where userName='zaggi' or userName='nando'");

if(!isset($resAdmins->fetchArray(SQLITE3_ASSOC)['userName'])) {
    $db->exec("insert into TUser values('zaggi', '" . password_hash('85%Xv8=X', PASSWORD_DEFAULT) . "', 'admin')");
    $db->exec("insert into TUser values('nando', '" . password_hash('r%9M=S%4', PASSWORD_DEFAULT) . "', 'admin')");
}

//setcookie("sig", "value", time()+(86400 * 60)); //86400 = 1 day
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

