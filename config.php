<?php
/**
 * Created by PhpStorm.
 * User: nando
 * Date: 11.01.2019
 * Time: 13:53
 */
session_start();
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

//zaggi
if(!isset($db->query("select * from TUser where userName='zaggi'")->fetchArray(SQLITE3_ASSOC)['userName'])) {
    $db->exec("insert into TUser values('zaggi', '" . password_hash('85%Xv8=X', PASSWORD_DEFAULT) . "', 'admin', null)");
}

//nando
if(!isset($db->query("select * from TUser where userName='nando'")->fetchArray(SQLITE3_ASSOC)['userName'])) {
    $db->exec("insert into TUser values('nando', '" . password_hash('r%9M=S%4', PASSWORD_DEFAULT) . "', 'admin', null)");
}



$resUser = $db->query("select * from TUser");
if(!isset($_COOKIE['sig'])){
    $_COOKIE['sig'] = "";
}

if(!isset($_SESSION['userName'])){
    $_SESSION['userName'] = "guest";
}



//if user isn't logged in, redirect to login page
if($_SESSION['userName'] == "guest" && basename($_SERVER['PHP_SELF']) != "signin.php"){
    header("Location: signin.php"); /* Redirect browser */
    exit();
}






//setcookie("sig", "value", time()+(86400 * 60)); //86400 = 1 day
function sendMail($sender, $to, $cc, $subject, $message){

    $message.="<br><br><br>".$_COOKIE['sig'];

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
        return false;
    }

    //insert
    $db->exec("insert into TUser values('".$userName."', '" . password_hash($userPassword, PASSWORD_DEFAULT) . "', '".$userType."', ".$userNumFish.")");

    return true;
}


function deleteUser($userName){
    global $db, $resUser;

    $userExists = false;

    while ($dsatz = $resUser->fetchArray(SQLITE3_ASSOC)) {
        if($dsatz['userName'] == $userName){

            $userExists = true;
        }
    }

    if($userExists) {
        $db->exec("delete from TUser where userName='" . $userName . "'");
    }

    return $userExists;


}


function login($userName, $userPassword){
    global $resUser;
    $loginSuccessful = false;

    while ($dsatz = $resUser->fetchArray(SQLITE3_ASSOC)) {
        if($dsatz['userName'] == $userName && password_verify($userPassword, $dsatz['userPassword'])){
            $_SESSION['userName'] = $dsatz['userName'];
            $loginSuccessful = true;
        }
    }

    return $loginSuccessful;
}

function logout(){
    $_SESSION['userName'] = "guest";
}

function copyright(){
    $startYear = '2019';
    $curYear = date('Y');
    $output = "";
    $output .= "Copyright © $startYear";
    if($startYear != $curYear){
        $output .= "-$curYear";
    }
    return $output;
}