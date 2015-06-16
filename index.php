<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cryptography";
$_SESSION["inject"]="";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM thereal1";          
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
				$i=1;$a[]=0;	
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{ $_SESSION["l".$i]="";
			$_SESSION["dl".$i]="";
			$i++;
			}
			header("location:index1.php");
			}?><body>
</body>
</html>
