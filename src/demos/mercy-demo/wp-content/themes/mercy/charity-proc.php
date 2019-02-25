<?php


if($_POST['honeypot'] != ''){

die("You spammer!");
}






if ($_SERVER['REQUEST_METHOD']=="POST"){

if (strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST'])>11 ||

!strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']))

die("Bad referer");




function getIp()
{
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip_address=$_SERVER['HTTP_X_FORWARDED_FOR'];
}

if (!isset($ip_address)){
        if (isset($_SERVER['REMOTE_ADDR']))
        $ip_address=$_SERVER['REMOTE_ADDR'];
}
return $ip_address;
}




//taking info about date, IP and user agent

$timestamp = date("h:i:s A T m-d-Y");
$ip   = getIp();
$host = gethostbyaddr($ip);
$user_agent = $_SERVER["HTTP_USER_AGENT"];



$msg.="<html><body style='padding: 20px; background-color: #fff;'>";
$msg.="<div style='width: 600px; border-radius: 5px;'><span style='font-size: 16px; font-weight: 400; color: #000; display: block; text-align: left; padding: 20px; background-color: #f4f4f4; margin-left: 20px;'><big>Message Received</big><br><br>Thank you for contacting Mercy about a charitable donation. We have received your message and are sending this receipt in confirmation. We will respond by phone or email shortly. For an urgent matter, please call us at 612-252-7000. Thank you for your patience, we'll be in touch soon. <br><br>Sincerely,<br>Mercy </span></div>";
$msg.="<br>";

$msg.="<span style='font-size: 16px; font-weight: 700; color: #000; display: block; text-align: left; padding: 20px 0px 10px;'><big>Contact Page Form</big></span>";

$msg.= "<table border='0' cellpadding='5' cellspacing='0' style='padding: 20px; background-color: #ffffff; border: 1px;'>";

while( list( $key, $val ) = each( $_POST )) {
if (empty($val)){


} else {









$msg.="<tr border='0' style='border-bottom: 1px;'><td style='font-size: 14px; font-weight: 700; color: black; border-bottom: 0px;' border='0'>" . $val . " </td> </tr>";

}

}

$msg.= "</table>";



$msg.="<br><br></body></html>";

//$recipient = $_POST["email"];



$email = $_POST['email'];





$subject="Contact Page Submission Received";

$headers = 'To:'.$email."\r\n";
$headers = "From: noreply@mercympls.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$recipient = "migspamhoneypot@gmail.com" ;	
$headers .= 'BCC:' .$email . "\r\n" ;
$headers .= "BCC: migspamhoneypot@gmail.com," .$email. "\r\n";

//Disable error reporting??
error_reporting(0);

$today = date("F j Y");
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$fp = fopen('contacts/charity-leads.csv', 'a');
fwrite($fp,  $today . ',' .$name . ',' . $email . ',' .$phone . ',' . PHP_EOL);
fclose($fp);


if (mail($recipient, $subject, $msg, $headers)){
header( "Location: http://mercympls.com/thank-you" , true);
} else
echo "An error occurred and the message could not be sent.";
} else
echo "Bad request method";

?>
