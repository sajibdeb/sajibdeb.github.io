<?php
require 'PHPMailer/class.phpmailer.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $msg=$_POST['message'];

            $mail = new PHPMailer(true);

        	$mail->IsSMTP();
        	$mail->SMTPAuth   = true;
        	$mail->Port       = 625;
        	$mail->Host       = "localhost";
        	$mail->Username   = "contact@sajibdeb.com";//Enter Username of Webmail
        	$mail->Password   = "SajibDeb017";  //Password of webmail

        	$mail->IsSendmail();

        	$mail->From       = "contact@sajibdeb.com";// Erom Email Address
        	$mail->FromName   = "Sajib Deb"; //Name

        	$mail->AddAddress($email);

        	$mail->Subject  = "Thank you for contacting US";
        	$mail->WordWrap   = 80;

            $body= $name."Thank You For Contacting Us";

        	$mail->MsgHTML($body);
        	$mail->IsHTML(true);
        	$mail->Send();



        	echo '<script language="javascript">';
	        echo 'alert("Thank You Contacting Us We Will Response You As Early Possible")';
	        echo '</script>';
	      	echo "<script>setTimeout(\"location.href = 'contact_us.php';\",00);</script>";

}else{
	echo '<script language="javascript">';
	echo 'alert("Something Wrong.")';
	echo '</script>';
	echo "<script>setTimeout(\"location.href = 'contact_us.php';\",00);</script>";
}
