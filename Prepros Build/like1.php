<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	   //connection
	            session_start();
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "cryptography";
	
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
	?>
<?php
	
	$id = $_POST['id'];
	$z=$_SESSION['l'.$id];
	if($z=="")
	{$_SESSION['l'.$id]=1;
	//$liked = $_REQUEST["liked"];
	$liked = $_POST['like'];
	$liked=$liked+1;
/*
$sql="SELECT * FROM thereal1 ORDER BY liked DESC LIMIT 1 ";
$result = mysqli_query($conn, $sql);

while($row=$result->fetch_assoc())
{
	$id=$row['id'];
	$liked=$row['liked']
*/
 			
		$incr = "UPDATE thereal1
		SET liked = ".$liked."
		WHERE  id=".$id."";
		$_SESSION["times"]=1;
		if (mysqli_query($conn, $incr)== TRUE)
		{
		    
			$_SESSION["inject"]="<div class='alert alert-success'>
			<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Success!</strong>
</div>";
			header('location:index1.php#contest');
		}
		
		else {
		echo"You response couldnot be set";
		}
		}
		else
		{
		$_SESSION["inject"]="<div class='alert alert-warning'>
		<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
  <strong>Can be liked only once!</strong>
</div>";
header('location:index1.php#contest');
}
?>

</body>
</html>
