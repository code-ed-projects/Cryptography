<?php
session_start();
$z=$_SESSION['inject'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><!DOCTYPE html>
<html lang="en">
  <head>
       <link rel="stylesheet" href="css/bootstrap.css" />
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/bootstrap-theme.css" />
   <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
   <link rel="stylesheet" href="css/animate.css" />
   <link rel="stylesheet" href="css/preloader.css" />
   <link rel="stylesheet" href="css/responsive.css" />
   <link rel="stylesheet" href="css/simple-line-icons.css" />
   <link rel="stylesheet" href="css/style.css" />
   <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>
  
 
  <style>
  #ahole1
  { width:150px; height:150px;  background: linear-gradient(to bottom right, yellow , brown);font-size:20px; border-radius:600px;}
  
  #ahole
  {
  width:100px; height:100px;  background: linear-gradient(to bottom right, yellow , brown);font-size:100px; border-radius:600px;}
  .features
{        color:#eebb99;
	padding: 80px 0px;
	background-color: #800000;
	float: left;
	width: 100%;	 
}
.features-section
{
	text-align: center;
}
.features-section ul
{
	margin: 20px 0px;
}
.features-section ul li
{
	width: 360px;
	display: block;
	text-align: center;
	float: left;
}
.feature-icon
{
	background:url(images/feature-icons.png) no-repeat;
	width: 60px;
	height: 60px;
	display: inline-block;
}
.features-section ul li h4
{
	font-size: 17px;
	font-weight: 600;
	color: #fff;
	font-family: 'Raleway', sans-serif;
	line-height: 50px;
	margin-top: 10px;
}
.features-section ul li p
{
	color: #aab1bf;
	font-size: 15px;
	line-height: 20px;
	width: 90%;
	margin: 0 auto;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	
}
        @-webkit-keyframes abc{
            0%{
                height:250px;width:250px;border-radius:125px;
            }
						
			
            50%{
                height:280px;width:280px;border-radius:140px;
            }
			
			
            100%{
                height:250px;width:250px;border-radius:1250px;
            }
        }
        #ab{
           
            background-color:rgba(59, 82, 196, 0.76);
            height:250px;
            width:250px;
          border-radius:125px;
          
        }
		 #a {
    background-color: white;
    width:auto;
    height:auto;
   padding:6px;
	margin:3px;
font-size:inherit;}
#z {
    background-color: white;
    width:auto;
    height:auto;
   padding:6px;
	
font-size:10px;

}
#o
{
color:#FF8533;
font-size:15px;}
        #c{
            position:absolute;
            top:100px;
            left:80px;
            font-size:25px;
            font-family:Helvetica;
           
        }
        #ab:hover{
            -webkit-animation:abc 1s infinite;
        }
		
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
          
    <!-- ===========================
    THEME INFO
    =========================== -->
    <meta name="description" content="A free Bootstrap powerd HTML template exclusively crafted for the super lazy designers like me who designed thousand of websites till today but never got a chance to build one himself.">
    <meta name="keywords" content="Free Portfolio Template, Free Template, Free Bootstrap Template, Dribbble Portfolio Template, Free HTML5 Template">
    <meta name="author" content="EvenFly Team">
    
    <!-- DEVEOPER'S NOTE:
    This is a free Bootstrap powered HTML template from EvenFly. Feel free to download, modify and use it for yourself or your clients as long there is no money involved.
    
    Please don't try to sale it from anywhere; because I want it to be free, forever. If you sale it, That's me who deserves the money, not you :)
    -->

    <!-- ===========================
    SITE TITLE
    =========================== -->
    <title>code-Ed Cryptography</title><!-- This is what you see on your browser tab-->
    
    <!-- ===========================
    FAVICONS
    =========================== -->
    <link rel="icon" href="img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-ipad-retina.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-iphone-retina.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-iphone.png" />
     
    <!-- ===========================
    STYLESHEETS
    =========================== -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/animate.css">
        
    <!-- ===========================
    ICONS: 
    =========================== -->
    <link rel="stylesheet" href="css/simple-line-icons.css">    
    
    <!-- ===========================
    GOOGLE FONTS
    =========================== -->    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Antic|Raleway:300">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  <!-- ===========================
   GOOGLE ANALYTICS (Optional)
   =========================== -->
    
    <!--Replace this line with your analytics code-->
     
    <!-- Analytics end-->
  
   </head>
    
        <!-- Preloader -->
        
   
    <body>
        <!-- Preloader -->
                
        <!-- ===========================
         NAVBAR START
         =========================== -->
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
               <div class="container">
                   
                      <div class="navbar-header">
                       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                           <span class="sr-only">Toggle navigation</span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                        </button>
                        
                           <a class="navbar-brand" href="index1.php">
                            <!-- Replace Drifolio Bootstrap with your Site Name and remove icon-grid to remove the placeholder icon -->
                           <span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;Code-Ed</a></div>

                      <div class="collapse navbar-collapse">
     
	                <ul class="nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
					<li>
					<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
					<input type="text"  name="searched-title" placeholder ="Search your title" />
					<button type="submit" class="btn-info" >Search<span class="glyphicon-search"></span>
					</button>
					</form>
					</li>
						
                        <li class="active"><a href="index.php"><span class="btnicon icon-cloud-download"></span>Reload:</a></li>
                    
					</ul>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><br /><!--navbar end-->        
     
	 <div id="look" class="wow container"><br /><br />
	
	
	 <?php echo $z;
	 $_SESSION['inject']="";
	 ?>
	 </div></header><!--header end--> 
	
	 <br />
	 <br />
	 
	<div class="container">   
<?php
   //connection

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
	if (isset($_GET["searched-title"]) )
	{
	
			$user_search = $_GET["searched-title"] ; 
			$user_search =	strtolower($user_search);	
			$sql="SELECT * FROM thereal1  ";          
				$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) 
			{
					$check=0;		
				// output data of each row
				while($row = $result->fetch_assoc())
				{
					if (strtolower($row['title'])==$user_search)
					{
					 $check=1;
					 break;
					}
					
					else
					{
					$check =0;
					}
				
				} 
			
				   if ($check==1)
				   {
				    	function update($id){
							
							$k="UPDATE thereal1
									SET liked=2
									WHERE id=$id  ";
									if ($conn->query($k))
									{
									  echo 'Liked';
									}
									else
									{
									echo 'My bad cant do it';
									}
						
						}
					echo "<br>
						<div class=' wow fadeInUp' data-wow-duration='3s'>
					
						<center><button id='ahole1'>
						<h3>".$row['title']."</h3>
						<h5><b>By-".$row['name']."</b></h5>
						</center>
						 <p><center>
				 
							<span class='col-xs-6'>	
	<form action='like12.php'   method='post'>
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='like' value='".$row['liked']."' />
	<input type='submit' class='btn btn-success' value='Like' />
	<span class='badge'>".$row['liked']."</span>;
	
	</form>
	</span>
			 
			<span class='col-xs-6'>	 
	 <form action='dislike12.php'  method='post'>		 
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='dislike' value='".$row['disliked']."' />
	<span class='badge'>".$row['disliked']."</span>
	<input type='submit' class='btn btn-danger' value='Dislike' />
	
	</center></p>
	</form> 
	</span>
	 
						<center><span style='text-align:right; text-decoration:underline ;'><a href='all.php'><button class='btn-warning'> VIEW ALL </button></a></span></center>
						<div class='row'>
						<div style='background-color: #CCCC99 ; color:#000099;width:auto; height:auto;'><center>
						<h3 style='background-color:#CCCCCC;'>ENCRPTION</h3></center><br>
						".$row['encript']."
						</div></div>
						
						
						<div class='row'>
						<div style='background-color: #CCCC99; color:#000099;width:auto; height:auto;'><center>
						<h3 style='background-color:#CCCCCC;'>DESCRIPTTION</h3></center><br>
						".$row['description']."
						</div></div>
						
						
						<div class='row'>
						<div style='background-color:#CCCC99 ; color:#000099;width:auto; height:auto;'><center>
						<h3 style='background-color:#CCCCCC;'>DECRYPTION</h3></center><br>
						".$row['decript']."
						</div></div>
												
						";
				   
				   }
				   else 
				   {
				   echo "Result not found";
				   }
			}
			else 
			{
				echo "Result not available";
			}

}
else 
	{

			$sql="SELECT * FROM thereal1 ORDER BY liked DESC ";          
			$result = mysqli_query($conn, $sql);
		
			if (mysqli_num_rows($result) > 0) 
			{
					$i=1;		
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{
					echo "
					<div class='col-xs-4 col-md-4 col-sm-4 col-lg-4 wow fadeInUp' data-wow-duration='3s'>
                <center><form action='".$_SERVER['PHP_SELF']."' method='get'>
					<input type='hidden' width='0px' height='0px' name='searched-title' value ='".$row['title']."' />
					<br><button id='ahole'>
									<b>".$i."</b></button>
				</form>
				<h3>".$row['title']."</h3>
				<h5><b>By-".$row['name']."</b></h5>
				 </center><p><center>
				 
							
	<form action='like12.php'   method='post'>
	<input type='hidden' width='0px' height='0px' name='id' value='".$row['id']."' />
	<input type='hidden' width='0px' height='0px' name='like' value='".$row['liked']."' />
	<button type='submit' class='btn btn-success' >Like<span class='badge'>".$row['liked']."</span></button>
	
	</form>
	<p>
			 
			
	 <form action='dislike12.php'  method='post'>		 
	<input type='hidden' width='0px' height='0px' name='id' value='".$row['id']."' />
	<input type='hidden' width='0px' height='0px' name='dislike' value='".$row['disliked']."' />
	
	<button type='submit' class='btn btn-danger'>Dislikes-<span class='badge'>".$row['disliked']."</span></button>
	
	</center></p>
	</form> 
		
			</div>
					";
					$i++;
				}
				
		}
}	
?></div>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    
    <!--Other necessary scripts-->
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.jribbble-1.0.1.ugly.js"></script>
    <script src="js/drifolio.js"></script>
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>    
  </body>
</html>