<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Registration</title>
</head>
<body>
<?php 
$conn=new mysqli("localhost","root","","cryptography");
if ($conn->connect_error)
{ die("Connection prob.".$conn->connect_error);}
?>
<?php
$user_name= $_POST['username'];
$user_email = $_POST['email'];
$user_suggestions = $_POST['suggestions'];


$new="INSERT INTO `cryptography`.`suggestions` (`id`, `name`, `email`, `suggestions`, `reg_time`) VALUES(NULL,'$user_name','$user_email','$user_suggestions',NULL)";
    if ($conn->query($new) == TRUE )
	{
//	email
		$pEmail="".$user_email."  " ;
		$subject = 'Codeed : Thank You for your suggestion';
		$Header = "From : harsh@code-ed.in";
		$message = "
		Greetings $user_name,\r\n\r\nYour suggestions are valuable to us\r\n\r\n-Team Code-Ed";
		$from = 'harsh@code-ed.in';
		
		mail($pEmail,$subject,$message,$from);
		
			$pEmail="harshseth75@gmail.com";
			$subject = 'Codeed Got a Suggestion';
			$Header = "From : harshseth75@codeed.com";
			$message = "". $user_name." Posted a  suggestion\r\n\r\n".$user_suggestions." \r\n\r\n-Team Code-Ed";
			$from = 'harsh@code-ed.in';	
			

			mail($pEmail,$subject,$message,"From: $from\n");
			
			
			$pEmail="ankit_c@outlook.com";
			$subject = 'Codeed Got a Suggestion';
			$Header = "From : harshseth75@codeed.com";
			$message = "". $user_name." Posted a  suggestion\r\n\r\n".$user_suggestions." \r\n\r\n-Team Code-Ed";
			$from = 'harsh@code-ed.in';
			mail($pEmail,$subject,$message,"From: $from\n");
			
			
		
	}

header("location:index1.php");
?><br>
</body>
</html>
