<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='ravibca2019@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Email Address:".$email."\n"."Feedback :"."\n\n".$msg;

		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Thanks"." ".$name.", For give Feedback!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>