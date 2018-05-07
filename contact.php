<?php

 $name = $_POST['Name'];
 $email = $_POST['Email'];
 // $subject =$_POST['Subject'];
 $phone = $_POST['Phone'];
 $message = $_POST['Message'];
 

 		// sender will also get a copy
 $to = " austinwise1993@gmail.com," .$email;

 			// to the receiver
// $to = "austinwise1993@gmail.com" ;

$subject = "";

$message = "
			<html>
				<head>
					<title>HTML email</title>
				</head>
				<body>
					<table>
						<div style ='background:#262d26;width: 100%;margin: auto;padding: 15px;line-height: 25px;font-family: sans-serif;font-size: 15px;    color: rgb(255, 255, 255);'>  
							NAME:<span>" .$name."</span> <br>
							Email:<span>" .$email."</span> <br>
							// Subject:<span>" .$subject."</span> <br>
							Phone:<span>" .$phone."</span> <br>
							Message:<span>" .$message."</span> <br>
						</div>
					</table>
				</body>
			</html>
		";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$set = mail($to,$subject,$message,$headers);
 if($set){
 	echo "<div class='alert alert-success'>Mail Sent Successfully</div>";

 }
 if(!$set){
 	echo "<div class='alert alert-danger'>There is an error sending mail</div>";
 }
?>