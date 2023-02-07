<style>
    p{

        padding: -5px;
    }
</style>

<?php

$to = "care@kouponkart.com";
$subject = "Advertise with us";

$message = $_POST['first_name'].' '.$_POST['last_name']." trying to reach you<br>";
$message .= "<P>Name - ".$_POST['first_name']." ".$_POST['last_name']."</P>";
$message .= "<p>Phone No - ".$_POST['phone_no']."</p>";
$message .= "<p>Email Id - ".$_POST['email']."</p>";
$message .= "<p>Street Address - ".$_POST['street_address']."</p>";
$message .= "<p>Suburb - ".$_POST['suburb']."</p>";
$message .= "<p>Postcode - ".$_POST['post_code']."</p>";
$message .= "<p>State - ".$_POST['state']."</p>";
$message .= "<p>About This Location - ".$_POST['location']."</p>";
$message .= "<p>Type of Business - ".$_POST['type_of_bussiness']."</p>";
$message .= "<p>Business Website or Facebook Page - ".$_POST['bussiness_website']."</p>";
$message .= "Anything else we should know? - ".$_POST['anything_else'];

$header = "From:advertisement@kouponkart.com \r\n";
// $header .= "Cc:test@gmail.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {

   echo "Message sent successfully... Thankyou for contacting us soon we will get back to you";

}else {

   echo "Message could not be sent...";
}

?>