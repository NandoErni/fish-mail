<?php
/**
 * Created by PhpStorm.
 * User: nando
 * Date: 11.01.2019
 * Time: 13:53
 */
$db = new SQLite3("data/fish.db");

//creating all sqlite3 tables
$db->exec("CREATE TABLE IF NOT EXISTS TUser (userName primary key, userPassword, userType, userNumFish null);");
/* all user types:
 *
 * Admin            unlimited amount of emails
 * Fish             limited amount of emails
 *
 * */

//check if default admins are set
$resDefaultAdmins = $db->query("select * from TUser where userName='zaggi' or userName='nando'");

if(!isset($resDefaultAdmins->fetchArray(SQLITE3_ASSOC)['userName'])) {
    $db->exec("insert into TUser values('zaggi', '" . password_hash('85%Xv8=X', PASSWORD_DEFAULT) . "', 'admin', null)");
    $db->exec("insert into TUser values('nando', '" . password_hash('r%9M=S%4', PASSWORD_DEFAULT) . "', 'admin', null)");
}

$resUser = $db->query("select * from TUser");


$_SESSION['user'] = "guest";

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

function createUser($userName, $userPassword, $userType, $userNumFish=3){
    global $db;

    //check if admin
    if($userType == "admin"){
        $userNumFish = "null";
    } elseif($userNumFish == "null"){
        return "Invalid userType";
    }

    //insert
    $db->exec("insert into TUser values('".$userName."', '" . password_hash($userPassword, PASSWORD_DEFAULT) . "', '".$userType."', ".$userNumFish.")");

    return "Successful!";
}

