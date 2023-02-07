
      <?php


         $to = "care@kouponkart.com";
         $subject = "New inquiry from website";
         
         $message = "<b>".$_POST['name']." trying to reach you </b><br>";
         $message .= "<p><b>Name - ".$_POST['name']."</P><p> Email id - ".$_POST['email']."</p><p>Subject - ".$_POST['subject']."</p>Message - ".$_POST['message'];
         
         $header = "From:newinquiry@kouponkart.com \r\n";
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