 <?php
			  session_start();
			  $z=$_SESSION["inject"];
			  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .row
{
    margin-left: 0 !important;
    margin-right: 0 !important;
}
 @media (max-width: 767px){body{margin-left:-30px;
 margin-right:-30px;}
    .navbar {
       padding:0 20px;
	    
    } 
 }
  #j{
    font-size: 50px;
}
 .modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-footer
{height:20%;}
.modal-body
{color:#000000;
font-weight:bold;}
#but
{width:170px; height:170px;  opacity:0.8;font-size:40px; line-height:90%; border-radius:600em;}
  #a1
  {width:100px; height:100px;  background: linear-gradient(to bottom right, red , blue);font-size:100px; border-radius:600px;}
  #a2
  {width:100px; height:100px;  background: linear-gradient(to bottom right, green , yellow);font-size:100px; border-radius:600px;}
  #a3
  {width:100px; height:100px;  background: linear-gradient(to bottom right,  yellow , brown);font-size:100px; border-radius:600px;}#a4
  {width:100px; height:100px;  background: linear-gradient(to bottom right, #CCFFFF,  #00008B);font-size:100px; border-radius:600px;}#a5
  {width:100px; height:100px;  background: linear-gradient(to bottom right, white ,purple);font-size:100px; border-radius:600px;}#a6
  {width:100px; height:100px;  background: linear-gradient(to bottom right, yellow , orange);font-size:100px; border-radius:600px;}
  .modal .modal-body { 
   position:relative; max-height: 360px;
    overflow-y: auto;
	text-align:justify;
}
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

.features12
{        color:#E6E6E6;
	padding: 80px 0px;
	background-image:url("img/2.gif");
	height:100%;
	width: 100%;
	background-repeat:no-repeat;	
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover; 
}
.features12-section
{
	text-align: center;
}
.features12-section ul
{
	margin: 20px 0px;
}
.features12-section ul li
{
	width: 360px;
	display: block;
	text-align: center;
	float: left;
}
.feature12-icon
{
	background:url(images/feature-icons.png) no-repeat;
	width: 60px;
	height: 60px;
	display: inline-block;
}
.features12-section ul li h4
{
	font-size: 17px;
	font-weight: 600;
	color: #fff;
	font-family: 'Raleway', sans-serif;
	line-height: 50px;
	margin-top: 10px;
}
.features12-section ul li p
{
	color: #aab1bf;
	font-size: 15px;
	line-height: 20px;
	width: 90%;
	margin: 0 auto;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	
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
        
        
       <header>               
        <!-- ===========================
        HERO AREA
        =========================== -->
        <div id="hero">           
            <div class="container herocontent">               
                <h2 class="wow fadeInUp" data-wow-duration="4s" style="color:#000000;">code-Ed</h2>                
                <h4 class="wow fadeInDown" data-wow-duration="6s" style="color:#000000;">cryptographers won wars!<br>
Cryptographers changed hostory!<br>
Experience the thrill, CYPHER!</h4>            
            </div>
            
            <!-- Featured image on the Hero area -->
            <img class="heroshot wow bounceInUp" data-wow-duration="4s" src="img/hero-img.jpg" alt="Featured Work">            
        </div><!--HERO AREA END-->        
        
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
                        
                           <a class="navbar-brand" href="#hero">
                            <!-- Replace Drifolio Bootstrap with your Site Name and remove icon-grid to remove the placeholder icon -->
                            <span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;code-Ed</a></div>

                      <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li><a href="#history"><b><span class="glyphicon glyphicon-time"></span></b>&nbsp;History</a></li>
                        <li><a href="#contest"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Contest </a></li>
                        <li><a href="#articles"><span class="glyphicon glyphicon-send"></span>&nbsp;Articles</a></li>
                        <li class="active"><a href=""><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reload:</a></li>
                    </ul>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><!--navbar end-->        
     </header><!--header end-->     

    <!-- ===========================
    FEATURED CLIENTS SECTION START
    =========================== -->
     <div id="clients">
         <div class="container">
             <div class="col-md-3">
                 <hr>
                 <h4>&nbsp;</h4>
           </div>
             <div class="col-md-9">
                 <ul><!--CLIENTS LOGO-->
                     <li></li>                     
                 </ul>
                 <!--CLIENTS LOGO END-->
             </div>
         </div>
         <!-- SECTION SEPARETOR LINE -->
     </div>
     <!--FEATURED CLIENTS SECTION END-->
     
    
    <!-- ===========================
    ABOUT SECTION START
    =========================== -->
     <div id="history" class="container">
        
        <!-- LEFT PART OF THE ABOUT SECTION -->
         <div class="col-md-6">
		 <div class="row">
		 
           
              <h2 class="wow fadeInUp" data-wow-duration="2s">Cryptography-Since When? </h2>
<div class="wow fadeInUp">
             Cryptography is one of the most oldest technicality practised by human civilisation, nearly for last 4000 years. 
			 <h1>Myth and legends:</h1>
			 Cryptic and hidden messages or mathematical understanding to hide the real picture for the ones with the key to realise the truth is part of nearly every story. Dating back to the Hindu epic Mahabharata, with its chakravyuha formation to Krishna's folklores; or the hidden messages surrounding the Christian beliefs, In the Bible, a Hebrew ciphering method is used at times. In this method, the last letter of the alphabet is replaced by the first, and vice versa, or the ideographs used by Chinese have the greatest of their reflections through the world of cryptanalysis.<br>
			 <h1>Historic evidence and preview:</h1>
			 The first traces of cryptography can be historically determined in around 2000 B.C. by Egyptians where the tomb of the deceased kings was decorated by hieroglyphics. These hieroglyphics were more used to make the appearance important than hiding any ciphered message. Though this form started getting more and more complex, random; thus losing track of deciphering minds.<br>
			 In India, secret writing was apparently more advanced, and the government used secret codes to communicate with a network of spies spread throughout the country. Early Indian ciphers consisted mostly of simple alphabetic substitutions often based on phonetics. <br>In the famous Greek drama the 'Iliad', cryptography is shown to be used when Bellerophon was sent to the king with a secret tablet which told the king to have him put to death. <h2>Caesar cipher:</h2>

The Caesar cipher has been one of the simplest and widest used ciphering technique used after Julius Caesar who mostly initiated its use. It is a simple technique where alphabets are incremented as per a given key. For instance if 2 is the key, A becomes C. <br>
This simple technique is still one of the most widest and simplest cipher technique in daily use.
      <br></div>
           </div>
            <!-- ABOUT INFO END -->
             
            
           
         </div><!-- LEFT PART OF THE ABOUT SECTION END -->
        <!--Left part end-->
         
         <!-- RIGHT PART OF THE ABOUT SECTION -->
         <div class="col-md-6 wow fadeInUp myphoto" data-wow-duration="6s">
             <img style="height:500px; width:550px;" src="img/user.jpg" alt="Mamun Srizon">
			 <h2>Modernity and Cryptography:</h2>
			 During the Middle Ages, cryptography started to progress. All of the Western European governments used cryptography in one form or another, and codes started to become more popular. 
The first major advances in cryptography were made in Italy. Venice created an elaborate organization in 1452 with the sole purpose of dealing with cryptography.
<h3>"The Father of Western Cryptology"</h3>
Leon Battista Alberti is was known as "The Father of Western Cryptology" in part because of his development of polyalphabetic substitution. Polyalphabetic substitution is any technique which allows different ciphertext symbols to represent the same plaintext symbol. This makes it more difficult to interpret ciphertext using frequency analysis. In order to develop this technique, Alberti analyzed the methods for breaking ciphers, and devised a cipher which would try to render these techniques invalid. 
Read more:<a href="http://www.cs.trincoll.edu/~crypto/historical/alberti.html">http://www.cs.trincoll.edu/~crypto/historical/alberti.html</a><br>
The next major step was taken in 1518, by Trithemius, a German monk who had a deep interest in the occult. He wrote a series of six books called 'Polygraphia'.<br>
Read more:<a href="https://borderlandsciences.org/journal/vol/33/n01/Crabb_Trithemius_of_Spanheim.html">https://borderlandsciences.org/journal/vol/33/n01/Crabb_Trithemius_of_Spanheim.html</a>


         </div><!-- RIGHT PART OF THE ABOUT SECTION END -->   
		
     </div><!-- ABOUT SECTION END -->
        
    <hr><!-- SECTION SEPARETOR LINE -->
	
<?php $servername = "localhost";
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

 <div class="features" id="features">
    	<div class="container">
       <div class="row wow">
	   <div class="col-md-3"><center><img src="alan.jpg" width="300" height="300" class="img-circle"></center></div>
			<div class="col-md-9"><center><h1>THE FATHER OF COMPUTER SCIENCE<br>ALAN MATHISON TURING</h1><hr><center><br>Alan Mathison Turing was a British pioneering computer scientist, mathematician, logician, cryptanalyst, philosopher, mathematical biologist, and marathon and ultra distance runner. He was highly influential in the development of computer science, providing a formalisation of the concepts of "algorithm" and "computation" with the Turing machine, which can be considered a model of a general purpose computer.Turing is widely considered to be the father of theoretical computer science and artificial intelligence.<br>
			<a href="home.html"><button class="btn-warning btn-lg">READ MORE</button></a></p></center>
			</div>
               
            </div>
        </div>
    </div>
        
    <!-- ===========================
    SERVICE SECTION START
    =========================== -->
   
    <div id="contest" class="container">
      
	   
        <!-- SERVICE SECTION HEADING START -->
        <div class="sectionhead  row wow fadeInUp">
            <h1>CIPHERING CONTEST WEEK</h1>
            <button id="ab" class="btn btn-primary" data-toggle="modal" data-target="#largeModal" style="width:250px; height:250px; border-radius:600px;"><center><h3>POST YOUR CODE</h3></center></button><br><br>
 
    <div id="largeModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    
                     <div class="row">
			   
			  <div class="col-md-4"> <h2 class="text-center">Encript</h2>  <form class="form-horizontal"role="form" action="processor1.php" method="post">
			   <center><textarea class="form-control" name="encript"rows="10" cols="35" placeholder="/*                                                                                                                                                                 Your Code                                                                                                                                                                                                                 */" required></textarea></center></div>
			   <div class="col-md-4"><h2 class="text-center">Description</h2>
			   <center><textarea class="form-control"name="description"rows="10" cols="35" placeholder="Description of your code" required></textarea></center></div>
			   <div class="col-md-4"><center><h2 class="text-center">Description</h2>
			   <textarea name="decript"rows="10" class="form-control"cols="35" placeholder="/*                                                                                                                                                                 Your Code                                                                                                                                                                                                                 */"required></textarea></center></div>
			   
			   </div>
			   <div class="form-group">
			   
			   <p><center><h4>Title<input role="form-control" id="focusedInput"type="text" name="title" required/>	</h4></center>
			   <center><h4>Name<input role="form-control" type="text" name="name" required/></h4></center></p>
			   <p><h4><center>Email<input role="form-control" type="email" name="email"></center></h4></p>
			   		   </div>
           
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" value="POST" class="btn btn-success">POST</button>
                </div>
            </div>
        </div>
    </div>
  
</div>
            <hr class="separetor">
         <!--SERVICE SECTION HEADING END-->
         
        <!-- SERVICE ITEMS START -->
		<div id="redi"><h2>SCORE BOARD TILL NOW</h2><br>
		
        <?php echo $z;
		$_SESSION['inject']="";?><div class="row wow">

              <?php
			  
			 
			  
		$sql="SELECT * FROM thereal1 ORDER BY liked DESC LIMIT 6 ";          
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
		{$n=mysqli_num_rows($result);
				$i=1;$o=1;		
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{   if($i==3 || $i==1)
			    {echo "<div class='row'>";}
				echo "
				<div class='col-xs-4 col-md-4 col-sm-4 col-lg-4 wow fadeInUp' data-wow-duration='3s'>
                <center><button class='responsive'id='a".$i."'>
				<b>".$i."</b>
				</button></center><h4>".$row['title']."</h4>
				<h5><b>By-".$row['name']."</b></h5>
				 <p>
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 <center>
	<form action='like1.php'   method='post'>
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='like' value='".$row['liked']."' />
	
	<button type='submit' class='btn btn-success'>Likes<span class='badge'>".$row['liked']."</span></button>
	</form>
	</center>
			 
			<center>
	 <form action='dislike.php'  method='post'>		 
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='dislike' value='".$row['disliked']."' />
	<button type='submit' class='btn btn-danger'>Dislike<span class='badge'>".$row['disliked']."</span></button>
	
	</center></p>
	</form> 
	</center>
				
             </div>   
				";
				
			$i++;
			if($i==4 || $i==7)
			{echo "</div>";}}
			
			
		}
		?></div></div>
 <!-- ITEM END -->
        </div>
		<center>
   <a href="all.php"  ><button type="button" class="btn-info" style="width:80px; height:80px; border-radius:400px;">Show all</button></a>
   </center><!-- SERVICE ITEMS END-->
    </div><!-- SERVICE SECTION END -->
   </div> 
   <!-- interstellar segment start --> 
   <div id="inter" class="features12" id="features12">
   <div class="container" >
   <br><br><div class="row">
   <div class="col-md-12">
   <center><H2>LEARN MORSE CODE IN ONE MINUTE</H2>
   <h3>In the movie Interstellar, Cooper lands in the tesseeract after "falling" into the black hole, time was one of the physical dimensions. Hence he could simply "go" to the time when (where) Murphy had grown up and then send the data through morse code. </h3> </div></div>
   <br><br><br><br>
   <div class="row">
   <div class="col-xs-6" data-toggle="modal" data-target="#myModal27"data-wow-duration="5s">
   <center><button class="btn-warning btn-block" class="responsive" id="but">LEARN <br>MORSE<br> CODE</button></div></center>
   <div class="col-xs-6">
   <center><a href="http://en.wikipedia.org/wiki/Black_hole"><button class="btn-warning btn-block" class="responsive" id="but">ABOUT <br>BLACK<br> HOLES</button></div></a></center>
   </div>
   </div></div>
  
    <!-- ===========================
    PORTFOLIO SECTION START
    =========================== -->
  
	
	
	<div id="articles">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
          <span class="bigicon icon-rocket"></span>
           <h2>ARTICLE STAND</h2>
           <hr class="separetor">            
        </div><!-- PORTFOLIO SECTION HEAD END -->   
        
        <!-- PORTFOLIO ITEMS START -->
        <div class="portfolioitems container">
            <div class="container">
			
			
					
  <div class="row wow">
    <div class="col-sm-6 wow bounceIn" data-wow-duration="5s">
      
	  <div id="a"><a href="CRYPTC++.pdf">><h1>CRYPTOGRAPHY IN C++</h1><b><hr></b>
					<p>Base cryptographic functions provide the most flexible means of developing cryptography applications.. All communication with a cryptographic service provider (CSP)........</p><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">50</span></p></a></div>
					
					
	
					
      <div class="row wow bounceIn">
        <div class="col-sm-6 wow bounceIn"data-wow-duration="5s">
          <div id="z" id="a" data-toggle="modal" data-target="#myModal2"><h3>Cryptography in PHP</h3><hr>
					<p>The crypt() function returns a string encrypted using DES , Blowfish , or MD5 algorithms.
function behaves different on different operating systems.
PHP checks what algorithms are available and what algorithms to use when it is installed .</p>
					<p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">530</span></p>
        </div></div>
        <div class="col-sm-6 bounceIn" data-wow-duration="5s">
          <div id="z"id="a" data-toggle="modal" data-target="#myModal3" ><h3>HILL CIPHER</h3><hr>
					<p>Cryptography is deﬁned to be the process of creating ciphers such that when applied to a message it hides the meaning of the message. Cryptanalysis is the process of breaking the cipher and discovering the meaning of the message. Finally, Cryptology is the study of both Cryptography and Cryptanalysis.</p><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">50</span></p>
        </div></div>
      </div>
    </div>
    <div class="col-sm-6 wow bounceIn" data-wow-duration="5s">
       <a><div id="a" data-toggle="modal" data-target="#myModal1"><h1>QUANTUM CRYPTOGRAPHY</h1><b><hr></b>
					<h3>Quantum mechanics and information:</h3><p>Quantum mechanics came up with a varied application in every possible field and thus in information is no lesser important way. </p><p>Wiesner was the first to apply quantum mechanics  into information for the first in sixties. He proposed using the spin of particles to make unforgeable bank notes. The spin of a particle obeys the uncertainty principle: no observer can record all the information for the spin of one particle for while acquiring the information for another particle, the one of first will change according to uncertainty principle. This would irreversibly destroy some part of the information when acquiring another part. After encoding identification information on bank notes using elementary particles, a bank can verify their authenticity by later checking the consistency of this identification information. At the atomic scale, no forger can perfectly copy quantum information stored in the elementary particles; instead, inevitable mistakes will be .........</p><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></div>
    </div></a>
  </div>
  <div id="myModal1" class="modal modal-wide fade" role="dialog">
  <div class="modal-dialog modal-wide">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1class="modal-title">ARTICLE</h2>
      </div>
      <div class="modal-body">
        <center><H2>QUANTUM CRYPTOGRAPHY</H2><h3>Quantum mechanics and information:</h3></center><p>Quantum mechanics came up with a varied application in every possible field and thus in information is no lesser important way. </p><p>Wiesner was the first to apply quantum mechanics  into information for the first in sixties. He proposed using the spin of particles to make unforgeable bank notes. The spin of a particle obeys the uncertainty principle: no observer can record all the information for the spin of one particle for while acquiring the information for another particle, the one of first will change according to uncertainty principle. This would irreversibly destroy some part of the information when acquiring another part. After encoding identification information on bank notes using elementary particles, a bank can verify their authenticity by later checking the consistency of this identification information. At the atomic scale, no forger can perfectly copy quantum information stored in the elementary particles; instead, inevitable mistakes will be committed according to uncertainty. Simply stated, copying the bank note identification information is subject to the uncertainty principle, and thus a forgery will be distinguishable from a legitimate bank note.</p><h3>Quantum key distribution:</h3>Quantum key distribution is a new and recent way to use cryptography for exchanging information between two points, usually called Alice and Bob, by exploiting the counterintuitive behavior of elementary particles such as photons.<br>


Say, by intercepting the communication channel used during the process. Very basics of Quantum mechanics are exploited to achieve this. To break the security of such a communication system, either Quantum mechanics has to be proved to become a flawed theory or some the theories of quantum mechanics has to fail.<br>


Following the tracks of Weisner's idea, Bennett and Brassard proposed in 1984 a protocol to distribute secret keys using the principles of quantum mechanics called quantum cryptography or more precisely quantum key distribution
 It relies on the no-cloning theorem for non-orthogonal quantum states. For example, it can be implemented using polarization states of single photons. Briefly, the Bennet–Brassard protocol works as follows:<br>
 <h4>Working :</h4>
 <h5>The sender end;</h5>
 The sender (usually called Alice) sends out a sequence of single photons. For each photon, it randomly chooses one of two possible base states, with one of them having the possible polarization directions up/down and left/right, and the other one polarization directions which are tilted by 45°. In each case, the actual polarization direction is also randomly chosen.

<h5>The receiver end;</h5>
The receiver (called Bob) detects the polarizations of the incoming photons, also randomly choosing the base states. This means that on average half of the photons will be measured with the “wrong” base states, i.e. with states not corresponding to those of the sender.<br>
Later, Alice and Bob use a public (possibly interceptable) communication channel to talk about the states used for each photon (but not on the chosen polarization directions). In this way, they can find out which of the photons were by chance treated with the same base states on both sides.<br>
They then discard all photons with a “wrong” basis, and the others represent a sequence of bits which should be identical for Alice and Bob and should be known only to them, provided that the transmission has not been manipulated by anybody. Whether or not this happened they can test by comparing some number of the obtained bits via the public information channel. If these bits agree, they know that the other ones are also correct and can finally be used for the actual data transmission.
<h5>The eavesdropper;</h5>
A possible eavesdropper (called Eve) would have to detect the photons' polarization directions without knowing the corresponding base states. In those cases where Eve's guess concerning the base states is wrong, Eve obtains random results. If Eve sends out photons with these polarization directions, Bob's results will also be random in cases where Bob's guess was right. This will therefore be detected during the last stage (the bit verification). Quantum mechanics would not allow Eve to do a polarization measurement without projecting the photon state onto the chosen base states, i.e., without altering the photon states.
<h4>Mathematical overview:</h4>
Graphic calculus in use:<br>
(i) Alice chooses two random bit string α = α1 . . .α4n and a = a1 . . .a4n.<br>
(ii) Alice encodes each bit αi as qubit in a manner depending on ai. A bit<br>
αi = 0 is encoded as qi = |0i if ai = 0 and as qi = |+i if ai = 1, and a bit<br>
αi = 1 is encoded as qi = |1i if ai = 0 and as qi = |−i if ai = 1.<br>
(iii) Alice transfers the quantum bits via a quantum channel to Bob.<br>
(iv) Bob chooses random bit string b = b1 . . .b4n and measures each qubit qi in the Z-basis if bi = 0 and in the X-basis if bi = 1, yielding β = β1 . . .β4n.<br>
(v) Bob sends b to Alice via a conventional channel.<br>
(vi) Alice sends a⊕b = a1 ⊕b1 . . . a4n ⊕b4n to Bob via a conventional channel.<br>
(vii) Alice (resp. Bob) only retain those bits αi<br>
in α (resp. βi in β) for which ai ⊕ bi = 0 and discard the others.<br>
In the absence of an attack both resulting strings, which have an average
 length of 2n, coincide. Denote it as ω = ω1 . . . ωη. Next Alice and Bob wish 
to verify whether no attack by Eve has taken place.<br>
(viii) Alice and Bob agree of a subset of n bits of their respective strings ω 
Alice 
and ω 
Beta and compare their values for these.<br>
(ix) If all bits of ω 
Alice and ω 
Beta match Alice and Bob use the remaining 
string ˜ω, which has an average length of n, as a private key for purposes 
of conventional cryptography.<br>

Mathematics source (further read):<br>
<a href="http://www.cs.ox.ac.uk/people/bob.coecke/QPL-Proceedings2010-1-30.pdf ">http://www.cs.ox.ac.uk/people/bob.coecke/QPL-Proceedings2010-1-30.pdf </a>
<h4>Applications of QKD:</h4>
<h5>Quantum Internet</h5>
Today’s internet is relatively fast, but its security is paltry compared to quantum-encrypted transmissions. So why don’t we transmit everything using QKDs? Well, for one, quantum encryption would greatly slow down the internet. In the future, however, it’s possible that we could switch seamlessly between “regular” and “quantum encrypted” internet, so that our most sensitive transmissions would be passed along in an ultra-secure manner. This would achieve the ideal of a simultaneously fast and secure internet. <br>
<h6>Highly secure voting, better communication with space, check on the information on internet as in Facebook, twitter eetc are some further soon to be seen applications.</h6>



      </div>
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center><br><center><h3>BY- Aman Vividesh Alok</h3></center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
  <div class="row">
   <div class="col-sm-12 wow bounceIn" data-toggle="modal" data-target="#myModal5"data-wow-duration="5s">
          <div id="z"><h3>HASH TECHNOLOGY</h3><hr>
					<p>Hash functions are by definition and implementation pseudo random number generators (PRNG). From this generalization its generally accepted that the performance of hash functions and also comparisons between hash functions can be achieved by treating hash function as PRNGs.<BR>
					Analysis techniques such a Poisson distribution can be used to analyze the collision rates of different hash functions for different groups of data. In general there is a theoretical hash function known as the perfect hash function for any group of data. The perfect hash function by definition states that no collisions will occur meaning no repeating hash values will arise from different elements of the group.</p>
					<p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">530</span></p>
        </div></div>

<div id="myModal27" class="modal fade modal-wide" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">MORSE</h4>
      </div>
      <div class="modal-body">
<h2>What is Morse Code ?</h2>
<p>Morse Code is a system in which letters are represented by dots and dashes. Morse Code was used over telegraph lines to send messages.</p>

<h1>Invented By……</h1>
Samuel Finley Breese Morse (1791-1872) was an American inventor and painter.  Morse built the first American telegraph around 1835.<br>
 A telegraph sends electrical signals over a long distance, through wires. Morse patented a working telegraph machine in 1837, with help from his business partners Leonard Gale and Alfred Vail. Morse used a dots-and-spaces code for the letters of the alphabet and the numbers (Morse Code was later improved to use dots, dashes and spaces: for example E is dot, T is dash, A is dot-dash, N is dash-dot, O is dash-dash-dash, I is dot-dot, S is dot-dot-dot, etc.). <br>
By 1838, Morse could send 10 words per minute. Congress provided funds for building a telegraph line between Washington D.C. and Baltimore, Maryland, in 1843. <br>
Morse sent the first telegraphic message (from Washington D.C. to Baltimore) on May 24, 1844; the message was: "What hath God wrought?" The telegraph revolutionized long-distance communications.<br>

Learn Morse Code in one minute…….<br>
1 . This is a code listening tool<br>
2. Place your pencil where it says START and listen to morse code.<br>
3. Move down and to the right every time you hear a DIT (a dot).<br>
4. Move down and to the left every time you hear a DAH (a dash).<br>
5. Here's an example: You hear DAH DIT DIT which is a dash then dot then dot.<br>
6. You start at START and hear a DAH then move down and left to the T and then you hear a DIT so you move down and RIGHT to the N and then you hear another DIT so you move DOWN and RIGHT again and land on the D<br>
7. You then write down the letter D on your code copy paper and jump back to START waiting for your next letter. <br>
8. The key to learning the code is hearing it and comprehending it while you hear it.<br>
9. The only way to get there is to practice 10 minutes a day.<br>
10. Listen to code tapes or computer practice code while tracing out this chart and you will find yourself writing down the letters in no time at all without the aid of the chart. <br>
11. The chart brings repetition together with recognition, which you don't get from any other type of code practice aid. 
<br>
<img src="img/slide3/m1.png">
<br>
<h1>Representation of Alphabets , Numbers & Special Characters……….</h1>
<img src="img/slide3/m2.png">
Link to translate Morse Code…….
<a href="http://morsecode.scphillips.com/translator.html">http://morsecode.scphillips.com/translator.html</a>
</div>
      <div class="modal-footer"><center><h3>BY-Ayush Kumar Gupta</h3>
</center>        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="myModal3" class="modal fade modal-wide" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ARTICLE</h4>
      </div>
      <div class="modal-body">
	  <h1>Introduction to Classical Cryptography</h1>
<p>
Cryptography is deﬁned to be the process of creating ciphers such that when applied to a message it hides the meaning of the message. Cryptanalysis is the process of breaking the cipher and discovering the meaning of the message. Finally, Cryptology is the study of both Cryptography and Cryptanalysis. The terms Cryptography and Cryptology have become synonymous over the years.
</p>

<h2>Hill Cipher</h2>
<p>
The Hill Cipher was developed by Lester Hill in 1929, setting it ﬁrmly in the classical age of cryptography. Lester Hill was a professor at Hunter College in New York City and ﬁrst published this method in the American Mathematical Monthly with his article Cryptography in an Algebraic Alphabet.It marked the transition cryptography made from a mainly linguistic practice to a mathematical discipline. Prior to World War II most cryptographic and cryptanalysis methods centered around replacing characters in a message with diﬀerent characters (using one or more alphabets) and mixing up or rearranging the message. Hence the code breakers were primarily people who were highly trained in linguistics, could speak several languages, and were good puzzle solvers. With the invention of the Enigma machine, used by the German’s in World War II, cryptanalysis of these ciphertexts required advanced mathematics and an enormous amount of computation, far beyond that of a single person or group of people.
</p>
<h3>Alice, Bob & Eve</h3>
<p>
We will discuss some of the basic concepts of cryptography and deﬁne some terms we will need. All classical cryptography techniques were what are called symmetric-key techniques. That is, the sender and receiver of the message had an encryption and decryption key that they shared and no one else knew what that key was. The security of the message depended on two things, keeping the key a secret between the sender and receiver and constructing both an encryption method and a key for that method that would be diﬃcult for someone to break. In fact, what was the most important aspect of this was the key. This is known as Kerckhoﬀ’s principle, which essentially says that one must always assume that the enemy knows the method of encryption and that the strength of the encryption is the strength of the key.
Three people you need to know in the world of cryptography are Alice, Bob and Eve. Alice is the sender of the message, Bob is the receiver of the message and Eve is the eavesdropper.
In symmetric-key cryptography, the traditional method and the only one used before 1977, Alice and Bob would share an encryption and decryption key that only the two of them knew. When Alice wanted to send a message (plain- text) to Bob she would use the key to encrypt the message into ciphertext, she would then send the ciphertext to Bob where he would use the decryption key to decrypt the message back into plaintext and read what Alice had to say. In all transmissions we assume that a third person, Eve, could and does intercept the message. Now Eve does not have the key, she only has the ciphertext. It is her job to break the code either by ﬁnding the key and decrypting the message or by ﬁnding the meaning of the message without ﬁnding the entire key.
</p>
<h2>Types of Attacks</h2>
<p>
Eve wishes to attack the system. She has several goals in mind but her primary one is to ﬁnd the encryption and decryption key for the message and then decrypt the message so that she knows the meaning of the message. There are four standard attacks on a cryptographic method, They are,
Ciphertext Only: Eve has only a copy of the ciphertext.
</p>
<p>
Known Plaintext: Eve has a copy of the ciphertext and the corresponding plaintext from the message or another message she suspects was encrypted with the same key. Ob- viously, she would not have the plaintext of the entire message or there would be no reason to decrypt the message. For example, suppose that Alice always started her letters to Bob with “Dear Bob,” then Eve knows what the ﬁrst several letters of message and has the corresponding ciphertext. This is called a crib, a portion of the plaintext message. On the surface it seems that knowing only seven letters would be of little use to Eve, but in many cases this would be enough information to construct the entire key.
</p>
<p>
Even with very complicated ciphers, like the German Enigma, this amount of informa- tion was useful. In one particular case, during World War II, shortly after 6 AM every morning the Germans sent an encrypted radio transmission for the day’s weather. So it was certain that the word WETTER, the German word for weather, would be in that transmission. Also, with the consistency of military-type transmissions it was not too diﬃcult to ﬁgure out where that word would be in each transmission.
Chosen Plaintext: Eve temporally gains access to the encryption machine, she carefully chooses some plaintext messages, sends them through the machine to obtain the cor- responding ciphertexts. Now she can do a known plaintext attack. If she chooses her plaintext messages well she will have an easier time in ﬁnding the key.
</p>
<p>
Chosen Ciphertext: Eve temporally gains access to the decryption machine, carefully chooses some ciphertexts, sends them through the machine to obtain the corresponding plaintexts. Now she can do a known plaintext attack. Again, if she chooses her ciphertext messages well she will have an easier time in ﬁnding the key.
</p>
<p>
Clearly, the ciphertext only attack is the most diﬃcult since it relies on the least amount of information. Diﬀerent cryptographic methods have their own particular strengths and weaknesses. So for some methods a chosen plaintext attack will work better and for others a chosen ciphertext attack is preferred. For the Hill Cipher we will be doing known plaintext attacks on the system to ﬁnd the key.
</p>
<h2>Block Ciphers</h2>
<p>
In a simple substitution cipher, where each letter of the plaintext is replaced with some other letter, changing one letter in the plaintext changes only one letter in the ciphertext. This is a substantial weakness that usually makes ﬁnding the key to the cipher fairly easy. One way around this weakness is to encrypt several characters at once. For example, we could take the plaintext message and break it into blocks of 5 characters and then encrypt each of the blocks. To do this we would need to devise a method that encrypts and decrypts 5 characters at one time and not just one character at a time.
</p>
<p>
A block cipher is simply any cipher that encrypts and decrypts blocks of characters instead of just a single character at a time. The Hill cipher is such a cipher. In fact, as we will see we could devise a Hill cipher to encrypt as many characters as we want at one time.
</p>
<p>
The Hill Cipher is a block cipher. Here is how it works in general. After we discuss the general process we will look at an example.
</p>
<h2>Encryption with the Hill Cipher</h2>
<p>The Hill Cipher Encryption Algorithm</p>
</br>

<p>
1. Find an n×n matrix E that is invertible modulo 26. This is actually the encryption key.
</p>

<p> 
2. Take the message that is to be sent (the plaintext), remove all of the spaces and punctuation symbols, and convert the letters into all uppercase.

</p>
<p>
3. Convert each character to a number between 0 and 25. The usual way to do this is A = 0, B = 1, C = 2, ..., Z = 25. 
</p></br>
<p>
As a historical note, Lester Hill did not use this coding of letters to numbers, he simply mixed up the order. Mixing up the order does not make the method more secure, it simply combines the Hill cipher with a simple substitution cipher, which are easy to break. 4. Divide this string of numbers up into blocks of size n. Note that if E is an n × n matrix then the block size is n. Another note, if the message does not break evenly into blocks of size n we pad the ending of the message with characters, this can be done at random.
</br>
</p>
<p>
5. Write each block as a column vector of size n. At this point the message is a sequence of n-dimensional vectors, v1,v2,...,vt.
</br>
</p>
<p>
6. Take each of the vectors and multiply them by the encryption matrix E, so
Ev1 = w1 Ev2 = w2 Ev3 = w3 . . . Evt = wt
</br>
</p>
<p>
7. Take the vectors w1,w2,...,wt, write the entries of the vectors in order, convert the numbers back to characters and you have your ciphertext.
</br>
</p>
<p>
One note about this algorithm is that we can do step 6 with a single matrix multiplication. If we let the message matrix M be the matrix produced by having the vectors v1,v2,...,vt as columns, that is, M = [v1 v2 ... vt] then EM = [w1 w2 ... wt] = C would be our ciphertext matrix.
</p>
Example: Say Alice wants to send Bob the message “Cryptography is cool!”


<img src="img/slide3/1.PNG">

<p>
</p><p>
7. Convert C into the ciphertext.
25 18 7 11 5 6 11 10 19 21 3 20 22 0 16 1 2 6
 ZSHLFGLKTVDUWAQBCG

</p><p>So Alice will send “ZSHLFGLKTVDUWAQBCG” to Bob.
</p></br><p>Since this is a symmetric cipher, Alice and Bob would have to share this key with each other. They obviously could not simply call or text each other with this information since Eve could easily intercept that call or text and would know the key. So either Alice and Bob would have to meet in person, in a secure location, and exchange the key or they would need some other trusted person to deliver the key from Alice to Bob. This diﬃculty in exchanging the key securely gave rise to the creation of public-key systems which are commonly used today.
</p><p>
<h2>Decryption with the Hill Cipher</h2>
<p>
Now that Bob has the encrypted message and the encryption key he can decrypt the message that Alice had sent to him. The decryption algorithm is essentially the same as the encryption algorithm, except that we use E−1 in place of E. Since EM = C, and E is invertible we can calculate M = E−1C. We will call D = E−1 the decryption matrix, so DC = M. Remember that this inverse is the inverse modulo 26.
</p>
<p>
The Hill Cipher Decryption Algorithm
</br></br>
<p>
1. Find D = E−1 (mod 26). This is the decryption key.
</p><p>2. Take the ciphertext and convert it to the matrix C.
</p><p>3. Calculate DC = M.
</p><p>4. Convert the matrix M to the plaintext message. You may need to insert the appropriate spaces and punctuation symbols since these were removed.
 </p>Bob has the encrypted message ZSHLFGLKTVDUWAQBCG. 


<img src="img/slide3/2.png"><br>
<img src="img/slide3/2a.png"><br>


<h2>Breaking the Hill Cipher</h2>
<p>
Now it is Eve’s turn, how can she ﬁnd the key to a Hill cipher? Looking at the encryption algorithm we know that EM = C. If have a portion of the plaintext and its corresponding ciphertext (a Known Plaintext attack) then we have a little of M and C. If we are lucky, the portion of M that we have might form an invertible n×n matrix (modulo 26). Then EM = C could be rewritten as E = CM−1, giving her the encryption matrix. From there, she simply inverts E modulo 26 to get D and then she can decrypt the entire message. </p><p>
There is really one more piece of information that Eve needs, if she just has plaintext and ciphertext characters she does not know the block size n and hence she does not know the size of E nor the size of the matrices M and C she needs to use to ﬁnd E. This is clearly a problem. But there is a way to guess the possible block sizes, if the message is not too long. Since Eve can get the entire ciphertext, she knows the number of letters in the message (possibly padded) and that this number of characters must be a multiple of the block size. So if she has intercepted"</p><p> ZSHLFGLKTVDUWAQBCG "she knows that the message has 18 characters in it, so the block sizes could possibly be, 2, 3, 6, 9 or 18. If the block size was 6, 9, or 18 she would not have enough characters to create M and C so it would not be possible for her to ﬁnd E and hence D. So the only possibilities she would have that would allow her to ﬁnd the key would be block sizes of 2 or 3. If these both fail to produce a key then she knows that she will not be able to break the code and not know the original message. As an example we will assume that Eve knows that "CRYPTOGRAPHYISCOOL " encrypts as “ZSHLFGLKTVDUWAQBCG” and we will follow the process outlined above to ﬁnd that the block size is 3 and the matrix E.</p><p>
Example : Eve has intercepted the encrypted message ZSHLFGLKTVDUWAQBCG and from other espionage knows that this message was CRYPTOGRAPHYISCOOL. She also knows that other messages sent that day between Alice and Bob are using the same key and she wishes to decrypt them as well, but she has no other information about these other messages.</p><p>
Since the message size 18 she knows that that block size must be 2, 3, 6, 9 or 18, and since she has only 18 characters to work with her only hope is that the block size is either 2 or 3. If both of these fail it is back to other espionage.</p></br><p></br>
Let’s start with a block size of 2. Since,</p><p>
CRYPTOGRAPHYISCOOL — 2 17 24 15 19 14 6 17 0 15 7 24 8 18 2 14 14 11
encrypts as
ZSHLFGLKTVDUWAQBCG — 25 18 7 11 5 6 11 10 19 21 3 20 22 0 16 1 2 6
  
  <br>
<img src="img/slide3/3a.png">
<br>
</p><p>
As before, we want to select three columns from our message matrix that will produce an invertible 3×3 matrix. Looking at the last row, all entries except for 11 are even, so the last column must be used. Since the last column ﬁrst row is even we must have at least one odd number in the ﬁrst row of the columns we use. So we could not select the remaining two columns from columns 1, 3, and 5. Furthermore, column 5 is all even so selecting it would be pointless. So in our selection we must have column 6 and at least one of columns 2 and 4. We will try columns 1, 2, and 6. This gives, 

<br>
<img src="img/slide3/4.png">
<br>
</p><p>
<h2>Security</h2>
<p>
Unfortunately, the basic Hill cipher is vulnerable to a known-plaintext attack because it is completely linear .An opponent who intercepts plaintext/ciphertext character pairs can set up a linear system which can (usually) be easily solved; if it happens that this system is indeterminate, it is only necessary to add a few more plaintext/ciphertext pairs. Calculating this solution by standard linear algebra algorithms then takes very little time. While matrix multiplication alone does not result in a secure cipher it is still a useful step when combined with other non-linear operations, because matrix multiplication can provide diffusion . For example, an appropriately chosen matrix can guarantee that small differences before the matrix multiplication will result in large differences after the matrix multiplication. Some modern ciphers use indeed a matrix multiplication step to provide diffusion. For example, the MixColumns step in AES is a matrix multiplication. The function g in Twofish is a combination of non-linear S-boxes with a carefully chosen matrix multiplication (MDS).</p>
<h2>Conclusion</h2>
<p>
Although the Hill cipher’s susceptibility to cryptanalysis has rendered it unusable in practice, it still serves an important pedagogical role in both cryptology and linear algebra. It is this role in linear algebra that raises several interesting questions.
</p>

</div>
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center><br>
	  <center><h3>BY- Ritika Shukla</h3>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



  
<div id="myModal6" class="modal fade modal-wide" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ARTICLE</h4>
      </div>
      <div class="modal-body">
        <H2>UNDERSTANDING CRYPTOGRAPHY</H2>
		First every single letter can be identified through a number of any means so a discussion about words and numbers can be contracted to a discussion of numbers, let's say a bucket of 1s and 0s as in computers.<BR>
Now cryptography is mostly the science rather an art of writing and solving codes, where codes are manipulated form of some expression.
<H1>Encryption vs Cipher</H1>
Every algorithm to cipher nearly works on “trap-door encryption”.  Now what is a "trap-door encryption"? The basic idea is that you find some mathematical set of instructions that’s easy to run forward, but practically impossible or tough to run backward, unless you know a private technique (which you keep secret). It’s likened to a trap-door because (as every super-villain knows) it’s easy to go through a trap-door in one direction, but difficult in the other.  This is fundamentally different from the general encoding schemes most people are familiar with, like “A=2, B=15, C=…” which are called “substitution cyphers”.  If you know how a substitution cipher is done, then you can not only encode a message, but you can decode it.<BR>

But encyrption (unlike “cypher”) is totally different.  It is a one way, you can encrypt but never decrypt.  Encryption is relatively new (publicly known since 1977).  Even the famous Enigma Device that the Germans used during WW2 was just a rolling substitution cypher. It simply theoretically encrypted!<BR>
<H1>Public key</H1>
The basic idea is to be aware about the forward operation ( known as the “public key”), which allows you to encrypt a message, but keep the secret to the reverse operation to yourself (the “private key”), which allows you to decrypt the messages.  This is exactly like knowing how to design locks and teaching it to people but keeping the secret of making keys strictly to yourself!<BR>

So if you want to talk to a particular person, you use their particular public key.  The central idea of encryption is that you can set up a system where other people can talk to you, perfectly securely, while sending all of their messages through a completely open and public channel.  Were you and a friend so inclined, you could communicate with each other entirely through a sign in KR Market, Bangalore, and no one would ever know what you were saying.  You can even do this without meeting before hand to set us a secret code!
<H1>RSA encryption</H1>
By far the most common method today is RSA encryption.  You can think of RSA as a huge wheel with a different number written on each spoke in a scrambled order.  These numbers correspond to every possible string of letters or numbers of a particular length or shorter.  If you rotate the wheel all the way around (or a multiple of all the way around) you get your message back, but if you only rotate part of the way you get a random number (technically, a pseudo-random number).<BR>
RSA encryption. If your message is Bomb Nagasaki, then by "turning the wheel" your encrypted message might be "vBhijk sadIeHO" something. Decryption is just turning the wheel the rest of the way to get back to Johnny. The secret is in knowing how many "spokes" the wheel has. If you know, then you know how to recover or decrypt the message. If you don't, then all you can do is encrypt.<BR>

The public key is turning the wheel a certain amount (not all the way), and the private key is how much you need to turn the wheel to get it the rest of the way.  The “secret” (and what keeps the private key private) is knowing exactly how big the wheel is.
<BR>
RSA encryption is secure because the “wheel” involved typically has at least 10150 “spokes”.  Even with full knowledge of the public key, the “size of the wheel” is really hard to pin down.  It could take any one of approximately 1075 values.
<BR>
If you want to send a message that’s too big to encrypt all at once, you just chop it up into smaller pieces and encrypt them one at a time.  This technique is not dissimilar to the standard means by which one eats something larger than one’s face.
<BR>
Beyond RSA, if you want to create a new form of encryption (like elliptic-curve or knapsack encryption, for example), you just hire a mathematician who studies some obscure branch of number theory and wait for a while.
<H1>Using &  Strict mathematical understanding of RSA</H1>
The ideas behind RSA encryption are modular math and some interesting consequences from group theory.  Modular arithmetic is what you’re doing when you try to figure out what time it will be in more than 12 hours.  For example, if it’s 9:00, then in 5 hours it will be 2:00.  This is “mod 12″ arithmetic.  Every time a number is larger than 12 you subtract 12 until it’s smaller.  This “9:00 + 5″ example can be written [9+5]_{12}=[14]_{12}=[2]_{12}=2.<BR>

There’s a function called the Euler phi, “φ(n)”, that’s defined as the number of numbers less than n that have no prime factors in common with n.  For example, φ(10)=4.  The factors of 10 are 2 and 5, and there are 4 numbers less than 10 that don’t contain any 2’s and 5’s: 1, 3, 7, and 9.<BR>

It so happens that [x^{\varphi(m)}]_m=1, for any x*.  For example, [3^{\varphi(10)}]_{10}=[3^4]_{10}=[81]_{10}=[1]_{10}=1 or [7^{\varphi(10)}]_{10}=[7^4]_{10}=[2401]_{10}=[1]_{10}=1.  Notice what happens when you raise a number to the “j\varphi(m)+1” power:<BR>

\begin{array}{ll}[x^{j\varphi(m)+1}]_m\\=[x^{j\varphi(m)}x]_m\\=[\left(x^{\varphi(m)}\right)^jx]_m\\=[\left(1\right)^jx]_m\\=[x]_m\end{array}
<BR>
So, if you raise any x to a particular power (mod m) it eventually cycles back and you get x again.  The process of encrypting something is nothing more than getting x part of the way through the cycle, and decryption is just completing the cycle and coming back to x.
<BR>
Now, say you’ve got a pair of numbers, k and ℓ, such that kℓ = jφ(m)+1.  To get from the original text, T, to the cyphertext, C, you just raise T to the kth power: [T^k]_m = C.  k is the public key.
<BR>
To recover the original text just raise C to the ℓ power:<BR> [C^\ell]_m=[\left(T^k\right)^\ell]_m=[T^{k\ell}]_m=[T^{j\varphi(m)+1}]_m= T.  ℓ is the private key.
<BR>
That’s basically all there is to RSA encryption.
<BR>
To create m, you just need to find two large primes, p and q.  To find large primes you just pick a big number and use something like Fermat’s Little Theorem, or a more full-proof modern variant, to test whether or not your pick is prime.  Once you have those primes you can generate m=pq and φ(m)=(p-1)(q-1).<BR>

To create k you just need a random number that’s coprime to φ(m), and determining that is easy enough: you can use Euclid’s algorithm.  Once you have k and φ(m) you can find ℓ by solving a Diophantine equation, kx+φ(m)y=1, for x and y, and then ℓ = [x]φ(m).  Alternatively, ℓ = [kφ(φ(m))-1]φ(m).  However, in order to calculate φ(x), you need to know the prime factors of x.  The factors of m are known, because m=pq, but the factors of φ(m) may not be known.
<BR>
When you’ve got all your number-ducks in a row, you make m and k public.  This means everybody can encrypt.  But you keep ℓ, φ(m), p, and q private.  Without p and q, there’s no (easy) way to find φ(m), and without φ(m) there’s no (easy) way to find ℓ.  There is a very quick way to break encryption keys (find ℓ), but it involves hardware that doesn’t exist just yet.  Here’s how!
<BR>
*More accurately, [x^{\varphi(m)+1}]_m=x and [x^{j\varphi(m)+1}]_m=x are always true, for any x, when m is the product of two prime numbers, but [x^{\varphi(m)}]_m=1 is only true when x and m have no common factors.  So, for example, [2^{\varphi(10)}]_{10}=[2^4]_{10}=[16]_{10}=[6]_{10}=6\ne1 and [2^{\varphi(10)+1}]_{10}=[2^5]_{10}=[32]_{10}=[2]_{10}=2.
<BR>
The details behind why aren’t complicated, but they aren’t generally interesting either.  The point is, in this case the math still holds up and is easier to understand when you say “[x^{\varphi(m)}]_m=1“, even though this statement isn’t exactly true.
<H1>Foreword</H1>
Apart from just sending message you can do everything cryptography does.  There’s shared random secret distribution, e-cash, e-signatures, secure voting, all kinds of stuff.  It’s awesome.


      </div>
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center>
        <br>
		<center><h3>BY-Aman Vividesh Alok</h3></center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <div id="myModal2" class="modal fade modal-wide" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <center><h2>in php</H2><hr>
	   					<h4>DEFINITIONANDUSAGE:</h4>
						<p style="text-align:justify;">
The PHP crypt() function is a string function used for one way encryption(hashing).<br>
/*The algorithm that crypt() uses is based on Data Encryption Standard(DES) of the National Institute of Standards and Technology (NIST).*/<br>
/*There is no decrypt function .The crypt() function uses a one way algorithm. */<br>
 

		  The crypt() function returns a string encrypted using DES , Blowfish , or MD5 algorithms.<br>
function behaves different on different operating systems.<br>
PHP checks what algorithms are available and what algorithms to use when it is installed .<br>
The exact algorithm depends on the format and length of the <u>salt</u> parameter.<br>
/*Salt is a random data that is used as an additional input to a one way function that hashes a password or passphrase.<br>
->salt is randomly generated for each password and in typical settings , it is concatenated with password and proceed with a cryptographic hash function<br>
->helps to make the encryption more secure. */<br>
<u>Constants</u> used together with the crypt function :<br>
/*value of these constants are set by PHP when it is installed*/<br>
<strong>[CRYPT_SALT_LENGTH]:</strong><br>
->The length of the default encryption . With standard DES encryption , the length is 2.<br>
<strong>[CRYPT_STD_DES]:</strong><br>
->2 character salt from the alphabet “./0-9A-Za-z”.<br>
<strong>[CRYPT_EXT_DES]:</strong><br>
-> 9 character salt consisting of an underscore followed by 4 bytes of iteration count and 4 bytes of salt.<br>
->encoded as printable characters ,6 bits per character , least significant characters first.<br>
->values 0to63 are encoded as “./0-9A-Za-z”.<br>
<strong>[CRYPT_MD5]:</strong><br>
->12 character salt starting with $1$.<br>
<strong>[CRYPT_BLOWFISH]:</strong><br>
->Salt starting with $2a$,$2x$, or $2y$,a two digit cost parameters “$”, and 22 characters from the alphabet “./0-9A-za-z”.<br>
->The “$” parameter is the base 2 logarithm of the iteration count for the underlying Blowfish-bashed hashing algorithmeter and must be in range 04-31.<br>
<strong>[CRYPT_SHA_256]:</strong><br>
->16 character salt starting with $5$.<br> 
->If the salt string starts with “rounds=<N>$”,the numeric value of N indicates how many times the hashing loop should be executed.<br>
->Default value of N =5000.<br>
->1000<N<999,999,999.<br>
/*any selection of N outside this range will be truncated to the nearest limit.*/<br>
/*On the systems where this function supports multiple algorithms, the constants above are set to “1” if supported,”0” otherwise.*/<br>
/* Using invalid characters or outside the range in the salt will cause the function to fail or return a zero length string. */<br>
<u>SYNTAX:</u><br>
crypt(str,salt)<br>
<strong><u>parameters description:</u></strong><br>
<u>str :</u>Required. Specifies the string to be encoded.<br>
<u>salt :</u>Optional. A string  used to increase the number of characters encoded. If the salt argument is not provided, one will be randomly generated by PHP.<br>
/*crypt() creates a weak password without the salt.*/<br>
/*password_hash() uses a strong hash,generates a strong salt,and applies proper rounds automatically.<br>
->password_hash() ia a simple crypt() wrapper and compatible with existing passwors hashes. */<br>
/*Using CRYPT_BLOWFISH algorithm,will result in the str parameter being truncated to a maximum length of 72 characters */<br>
<u><strong>TECHNICAL DETAILS:</strong></u><br>
Return value :<br>
->returns an encoded string or a string that is shorter than 13 characters and is guaranteed to differ from the salt on failure.<br>
/* warning : when validating passwords, a string comparison function that isn’t vulnerable to timming attacks should be used to compare the output of crypt() to the previously known hash. PHP 5.6 onwards provides hash_equals() for this purpose */<br>
PHP Version :4+<br>
Changelog :<br>
->Blowfish modes ere added in PHP 5.3.7<br>
->SHA-26 and SHA-512 were added in PHP 5.3.2<br>
->As of PHP 5.3.2, Blowfish on invalid rounds returns the “failure” string (“*0” “*1”),instead of falling back to DES.<br>
->As of PHP 5.3.0 , PHP contains its own implementation for the MD5 crypt , Standard DES , Extended DES and the Blowfish algorithms.<br>
<strong><u>CODING EXAMPLE :</u></strong><br>
*crypt() example<br>
-----*-----*-----*-----<br>
/*<br>
$hashed_password = crypt(‘mypassword’); <br>
//let the salt be automatically generated<br>
/*You should pass the entire results of crypt() as the salt for comparing a password , to avoid problems when different hashing algorithms are used.<br>
if(hash_equals($hashed_password,crypt ($user_input,$hashed_password)))<br>
{ <br>
echo "Password verified !";<br>
}<br>

-----*-----*-----*-----<br>
*Using crypt() with htpasswd<br>
-----*-----*-----*-----<br>
//set the password<br>
$password= ‘mypassword”;<br>
//get the hash,letting the salt be automatically generated<br>
$hash = crypt($password);<br>

-----*-----*-----*-----<br>
*Using crypt() with different hash types<br>
-----*-----*-----*-----<br>

/*These salts are examples only ..You should generate a distinct , correctly formatted salt for each password.<br>
//2 character salt<br>
if(CRYPT_STD_DES ==1)<br>
 { <br>
echo "Standard DES :".crypt(‘something’, ‘st’). "\n<br>";<br>
 }<br>
else<br>
{<br>
echo "Standard DES not supported.\n<br>";<br>
}<br>

//4 characters salt<br>
if(CRYPT_EXT_DES ==1)<br>
{<br>
echo "Extended DES :.crypt(‘something’ , ‘_s4..some’).\n<br>";<br>
}<br>
else<br>
{<br>
echo "Extended DES not supported.\n<br>";<br>
}<br>

//12 character salt starting with $1$<br>
if(CRYPT_MD5 ==1)<br>
{<br>
echo "MD5:crypt(‘something’ , ‘$1$something$’). \n";<br>
}<br>
else<br>
{<br>
echo "MD5 not supported.\n";<br>
}<br>
//salt starting with $2a$.The two digit cost parameter : 09.22 characters<br>
if(CRYPT_BLOWFISH ==1)<br>
{<br>
echo "Blowfish :.crypt(‘something’ , ‘$2a$09$anexamplestringforsalt$’). \n";<br>
}<br>
else<br>
{<br>
echo "Blowfish DES not supported.\n<";<br>
}<br>
//16 characters salt starting with $5$. The default number of rounds is 5000.<br>
if(CRYPT_SHA256 ==1)<br>
{<br>
echo " SHA-256:.crypt(‘something’, ‘$6$rounds=5000$anexamplestringforsalt$’).\n<br> " ;<br>
}<br>
else<br>
{<br>
echo "SHA-256 not supported.\n<br>";<br>
}<br>
//16 character salt starting with $5$. The default number of rounds is 5000.<br>
if(CRYPT_SHA512 ==1)<br>
{<br>
echo "SHA-512:.crypt(‘something’ , ‘$6$rounds=5000$anexamplestringforsalt$’)";<br>
}<br>
else<br>
{<br>
echo "SHA_512 not supported.";<br>
}<br>
/*<br>
-----*-----*-----*-----<br>
The output of the above code could be (depending on the operating system):<br>
-----*-----*-----*-----<br>
Standard DES: stqAdD7z1bByI<br>
Extended DES: _s4..someQxidlBpTUu6<br>
MD5: $1$somethin$4NZKrU1Y6rk7.rdE0Zow.<br>
Blowfish: $2a$09$anexamplestringforsaltLouke jcjrlexmf1671qw3kh149R3dfu<br>
SHA-256:<br>
$5$rounds=5000$anexamplestringf$Ktrctqsxo 2wrPg5ag/hs4jTi4PmoNKQGWfx1Vy9vu9<br>
SHA-512:<br>
$6$rounds=5000$anexamplestringf$0o0s kOAdUFXkQxJpwz005wgRHG0dhuaPbaoU/
oNbGpCEKlf/7oVM5wn6ANow 2vwUga0024oLzGQpp1XKI6LLQD<br>
-----*-----*-----*-----<br>
<u><strong>NOTICABLE POINTS :</strong></u><br>
	maximum length of the returned hash for the pupose of storing it in database = 123 characters.<br>
	To generate salt use mcrypt_create_iv() not mt_rand() it will only have atmost 32 bits of entropy. Which you will start seeing salt collisions after about 2^16 users.<br>
COMPARISON BETWEEN CRYPT AND SHA<br>
Both crypt and SHA are one way hashing algorithms.<br>
-> The crypt algorithm is provided for compatibility with UNIX passwords. It accepts the first 8 characters of a password and the output is always 13 characters long and includes only the characters A-Z,a-z,0-9,.,and/. It is generally weak and can be broken.<br>
->SHA provides a 160 bit hash, is more secure, and is more recommended.</p>
	</div>
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center>
        <br><center><h3>BY- Harshita Rawat</h3></center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

</div><div id="myModal5" class="modal fade modal-wide" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ARTICLE</h4>
      </div>
      <div class="modal-body">
        <h2>HASH TECHNOLOGY</h2>
		<h1>Hash Functions: an introduction</h1>
		Hash functions are by definition and implementation pseudo random number generators (PRNG). From this generalization its generally accepted that the performance of hash functions and also comparisons between hash functions can be achieved by treating hash function as PRNGs.<br>
 Analysis techniques such a Poisson distribution can be used to analyze the collision rates of different hash functions for different groups of data. In general there is a theoretical hash function known as the perfect hash function for any group of data. The perfect hash function by definition states that no collisions will occur meaning no repeating hash values will arise from different elements of the group.<br>

 Some dimensions to analyze for choosing hash functions are:<br>
 <h3>DATA  DISTRIBUTION</h3>
 This is the measure of how well the hash function distributes the hash values of elements within a set of        data. Analysis in this measure requires knowing the number of collisions that occur with the data set meaning non-unique hash values, If chaining is used for collision resolution the average length of the chains (which would in theory be the average of each bucket's collision count) analyzed, also the amount of grouping of the hash values within ranges should be analyzed.<h3>HASH FUNCTION EFFICIENCY</h3>
 This is the measure of how efficiently the hash function produces hash values for elements within a set of data. When algorithms which contain hash functions are analyzed it is generally assumed that hash functions have a complexity of O(1), that is why look-ups for data in a hash-table are said to be on "average of O(1) complexity", where as look-ups of data in associative containers such as maps (typically implemented as Red-Black trees) are said to be of O(logn) complexity.<br>
The hash functions in this essay are known as simple hash functions. They are typically used for data hashing (string hashing). They are used to create keys which are used in associative containers such as hash-tables. These hash functions are not cryptographically safe, they can easily be reversed and many different combinations of data can be easily found to produce identical hash values for any combination of data.<br>
<h3>HASHING  METHODOLOGIES</h3>
Hash functions are typically defined by the way they create hash values from data. There are two main methodologies for a hash algorithm to implement, they are:
<ul>
<li>ADDATIVE AND MULTIPLICATIVE HASHING</li>
This is where the hash value is constructed by traversing through the data and continually incrementing an initial value by a calculated value relative to an element within the data. The calculation done on the element value is usually in the form of a multiplication by a prime number.
<li>ROTATIVE HASHING</li>
Same as additive hashing in that every element in the data string is used to construct the hash, but unlike additive hashing the values are put through a process of bitwise shifting. Usually a combination of both left and right shifts, the shift amounts as before are prime. The result of each process is added to some form of accumulating count, the final result being the hash value is passed back as the final accumulation.
<h1>Hash Functions and Prime Numbers</h1>
The basic concepts surrounding the use of prime numbers in hash functions revolve around the concept of operating the current state value of the hash function with a prime number as opposed to another type of number. The term operate means something as simple as applying some form of mathematical operation such as multiplication or addition to the hash value. The result being a new hash value that should statistically have a higher entropic value or in other words a very low bit-bias for any of the bits in the new hash value. In simple terms when you multiply a set of random numbers by a prime number the resulting numbers when analyzed at their bit levels should show no bias towards being one state or another ie: Pr(Bi = 1) ~= 0.5. There is no concrete proof that this is the case or that it only happens with prime numbers, it just seems to be an ongoing self-proclaimed intuition that some professionals in the field seem obligied to follow.<br>
Deciding what is the right or even better yet the best possible combination of hashing methodologies and use of prime numbers is still very much a black art. No single methodology can lay claim to being the ultimate general purpose hash function. The best one can do is to evolve via trial and error and statistical analysis methods for obtaining suitable hashing algorithms that meet their needs.<br>
<h3>BIT BIASES</h3>
Bit sequence generators, be them purely random or in some way deterministic, will generate bits with a particular probability of either being one state or another - this probability is known as the bit bias. In the case of purely random generators the bit bias of any generated bit being high or low is always 50% (Pr=0.5).<br>
However in the case of pseudo random number generators, the algorithm generating the bits will define the bit bias of the bits generated in the minimal output block of the generator.<br>
Assume a PRNG that produces 8 bit blocks as its output. For some reason the MSB is always set to high, the bit bias then for the MSB will be a probability of 100% being set high. From this one concludes that even though there are 256 possible values that can be produced with this PRNG, values less than 128 will never be generated. Assuming for simplicity the other bits being generated are purely random, then there is equal chance that any value between 128 and 255 will be generated, however at the same time, there is 0% chance that a value less than 128 will be produced.<br>
All PRNGs, be they the likes of hash functions, ciphers, msequences or anything else that produces a bit sequence will all possess a unique bit bias. Most PRNGs will attempt to converge their bit biases to an equality, stream ciphers are one example, whereas others will work best with a known yet unstable bit bias.<br>
Mixing or scrambling of a bit sequence is one way of producing a common equality in the bit bias of a stream. Though one must be careful to ensure that by mixing they do not further diverge the bit biases. A form of mixing used in cryptography is known as avalanching, this is where a block of bits are mixed together sometimes using a substitution or permutation box, with another block to produce an output that will be used to mix with yet another block.<br>
As displayed in the figure below the avalanching process begins with one or more pieces of binary data. Bits in the data are taken and operated upon (usually some form of input sensitive bit reducing bitwise logic) producing an ith-tier piece data. The process is then repeated on the ith-tier data to produce an i+1'th tier data where the number of bits in the current tier will be less than or equal to the number of bits in the previous tier.
The culmination of this repeated process will result in one bit whos value is said to be dependent upon all the bits from the original piece(s) of data. It should be noted that the figure below is a mere generalisation of the avalanching process and need not necessarily be the only form of the process.<br>
<br><br><br>
<h1>Various Forms Of Hashing</h1>
Hashing as a tool to associate one set or bulk of data with an identifier has many different forms of application in the real-world. Below are some of the more common uses of hash functions.
<ul>
<li><h3>String Hashing</h3></li>
Used in the area of data storage access. Mainly within indexing of data and as a structural back end to associative containers(ie: hash tables)
<li><h3>Cryptographic Hashing</h3></li>
Used for data/user verification and authentication. A strong cryptographic hash function has the property of being very difficult to reverse the result of the hash and hence reproduce the original piece of data. Cryptographic hash functions are used to hash user's passwords and have the hash of the passwords stored on a system rather than having the password itself stored. Cryptographic hash functions are also seen as irreversible compression functions, being able to represent large quantities of data with a signal ID, they are useful in seeing whether or not the data has been tampered with, and can also be used as data one signes in order to prove authenticity of a document via other cryptographic means.
<h3><li>Geometric Hashing</li></h3>
This form of hashing is used in the field of computer vision for the detection of classified objects in arbitrary scenes.<br>
The process involves initially selecting a region or object of interest. From there using affine invariant feature detection algorithms such as the Harris corner detector (HCD), Scale-Invariant Feature Transform (SIFT) or Speeded-Up Robust Features (SURF), a set of affine features are extracted which are deemed to represent said object or region. This set is sometimes called a macro-feature or a constellation of features. Depending on the nature of the features detected and the type of object or region being classified it may still be possible to match two constellations of features even though there may be minor disparities (such as missing or outlier features) between the two sets. The constellations are then said to be the classified set of features.<br>
A hash value is computed from the constellation of features. This is typically done by initially defining a space where the hash values are intended to reside - the hash value in this case is a multidimensional value normalized for the defined space. Coupled with the process for computing the hash value another process that determines the distance between two hash values is needed - A distance measure is required rather than a deterministic equality operator due to the issue of possible disparities of the constellations that went into calculating the hash value. Also owing to the non-linear nature of such spaces the simple Euclidean distance metric is essentially ineffective, as a result the process of automatically determining a distance metric for a particular space has become an active field of research in academia.<br>
Typical examples of geometric hashing include the classification of various kinds of automobiles, for the purpose of re-detection in arbitrary scenes. The level of detection can be varied from just detecting a vehicle, to a particular model of vehicle, to a specific vehicle.<br>
<h3><li>Bloom Filters</li></h3>
A Bloom filter allows for the "state of existence" of a large set of possible values to be represented with a much smaller piece of memory than the sum size of the values. In computer science this is known as a membership query and is core concept in associative containers.<br>
The Bloom filter achieves this through the use of multiple distinct hash functions and also by allowing the result of a membership query for the existence of a particular value to have a certain probability of error. The guarantee a Bloom filter provides is that for any membership query there will never be any false negatives, however there may be false positives. The false positive probability can be controlled by varying the size of the table used for the Bloom filter and also by varying the number of hash functions.<br>
Subsequent research done in the area of hash functions and tables and bloom filters by Mitzenmacher et al. suggest that for most practical uses of such constructs, the entropy in the data being hashed contributes to the entropy of the hash functions, this further leads onto theoretical results that conclude an optimal bloom filter (one which provides the lowest false positive probability for a given table size or vice versa) providing a user defined false positive probability can be constructed with at most two distinct hash functions also known as pairwise independent hash functions, greatly increasing the efficiency of membership queries.<br>
Bloom filters are commonly found in applications such as spell-checkers, string matching algorithms, network packet analysis tools and network/internet caches.<br>
<h1>AVAILABLE HASH FUNCTIONS</h1>
The General Hash Functions Library has the following mix of additive and rotative general purpose string hashing algorithms. The following algorithms vary in usefulness and functionality and are mainly intended as an example for learning how hash functions operate and what they basically look like in code form.<BR>
<H3>•	RS Hash Function</H3>
A simple hash function from Robert Sedgwicks Algorithms in C book. I've added some simple optimizations to the algorithm in order to speed up its hashing process.<BR>
<h3>•	JS Hash Function</h3>
A bitwise hash function written by Justin Sobel
<H3>•	PJW Hash Function</H3>
This hash algorithm is based on work by Peter J. Weinberger of AT&T Bell Labs. The book Compilers (Principles, Techniques and Tools) by Aho, Sethi and Ulman, recommends the use of hash functions that employ the hashing methodology found in this particular algorithm.
<H3>•	ELF Hash Function</H3>
Similar to the PJW Hash function, but tweaked for 32-bit processors. Its the hash function widely used on most UNIX systems.
<H3>•	BKDR Hash Function</H3>
This hash function comes from Brian Kernighan and Dennis Ritchie's book "The C Programming Language". It is a simple hash function using a strange set of possible seeds which all constitute a pattern of 31....31...31 etc, it seems to be very similar to the DJB hash function.
<H3>•	SDBM Hash Function</H3>
This is the algorithm of choice which is used in the open source SDBM project. The hash function seems to have a good over-all distribution for many different data sets. It seems to work well in situations where there is a high variance in the MSBs of the elements in a data set.
<H3>•	DJB Hash Function</H3>
An algorithm produced by Professor Daniel J. Bernstein and shown first to the world on the usenet newsgroup comp.lang.c. It is one of the most efficient hash functions ever published.
<H3>•	DEK Hash Function</H3>
An algorithm proposed by Donald E. Knuth in The Art Of Computer Programming Volume 3, under the topic of sorting and search chapter 6.4.
<H3>•	AP Hash Function</H3>
An algorithm produced by me Arash Partow. I took ideas from all of the above hash functions making a hybrid rotative and additive hash function algorithm. There isn't any real mathematical analysis explaining why one should use this hash function instead of the others described above other than the fact that I tired to resemble the design as close as possible to a simple LFSR. An empirical result which demonstrated the distributive abilities of the hash algorithm was obtained using a hash-table with 100003 buckets, hashing The Project Gutenberg Etext of Webster's Unabridged Dictionary, the longest encountered chain length was 7, the average chain length was 2, the number of empty buckets was 4579. 



      </div>
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center>
        <br><center><h3>BY- Ankita Choudhury</h3></center><button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><BR>

<div class="row">
<div class="col-md-6 wow bounceIn" data-toggle="modal" data-target="#myModal6"data-wow-duration="5s">
          <div id="z"><h3>UNDERSTANDING CRYPTOGRAPHY</h3><hr>
					First every single letter can be identified through a number of any means so a discussion about words and numbers can be contracted to a discussion of numbers, let's say a bucket of 1s and 0s as in computers.
					<p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">530</span></p>
        </div></div>
</div>

			<!--REFER TO THE js/drifolio.js-->
        </div><!-- PORTFOLIO ITEMS END -->
        
        <!--Replace the URL below with your dribbble profile URL-->
       
    </div><!-- PORTFOLIO SECTION END -->

    <!-- ===========================
    TESTIMONIAL SECTION START
    =========================== -->
    <div id="testimonials" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <span id="j" class="glyphicon glyphicon-user large"></span>
		   <h1>TEAM CODE-ED</h1>
           <h3>THE FRONTEND AND BACKEND GUYS</h3>
           <hr class="separetor">            
        </div><!-- TESTIMONIAL SECTIONHEAD END -->
       
        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-xs-6 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                    <a href="https://www.facebook.com/ankit.chauhan.73932646?tsid=0.7318852108437568&source=typeahead"><img src="img/ankit.jpg" alt="Ankit Chauhan"></a>
                </div>
               
                    
                    <h4><b>ANKIT CHAUHAN</b></h4>
                    <b>Email-</b>ankit_c@outlook.com<br>
					<b>Skype Id-</b>live:ankit_c
                        </center>        
            </div><!-- 1ST TESTIMONIAL ITEM END -->
			
            
            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-xs-6 wow bounceIn" data-wow-duration="3s">
                <center><div class="clientsphoto">
                    <a href="https://www.facebook.com/coolharsh4u?fref=ts"><img src="img/harsh.jpg" alt="harsh"></a>
                </div>
                
                
                    <h4><b>HARSH SETH</b></h4>
                 <b> Email-</b>harshseth75@gmail.com<br>
					<b>Skype Id-</b>
                        </center>         
                                
            </div>
			 <!-- 2ND TESTIMONIAL ITEM END -->
            </div>
			<div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <h3>THE EDITORS</h3>
           <hr class="separetor">            
        </div>
		
		 <div class="col-xs-6 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                    <a href="https://www.facebook.com/svvividishnandam?fref=ts"><img src="img/aman.jpg" alt="Aman Alok"></a>
                </div>
               
                    
                    <h4><b>AMAN ALOK</b></h4>
                    <b>Email-</b><p id="hohohe">akaloksingh279@gmail.com</p><br>
					
                        </center>        
            </div>
			
			 <div class="col-xs-6 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                    <a href="https://www.facebook.com/profile.php?id=100009067552498"><img src="img/ankita.jpg" alt="Ankita Choudhury"></a>
                </div>
               
                    
                    <h4><b>ANKITA CHOUDHURY</b></h4>
                    <b>Email-</b><br><p id="hohohe">Ankita99Choudhury@gmail.com</p><br>
					
                        </center>        
            </div>
			
			 <div class="col-xs-6 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                    <a href="https://www.facebook.com/harshita.rawat1"><img src="img/harshita.jpg" alt="Harshita Rawat"></a>
                </div>
               
                    
                    <h4><b>HARSHITA RAWAT</b></h4>
                    <b>Email-</b><br><p id="hohohe">harshita.jan26@gmail.com</p><br>
					
                        </center>        
            </div>
			<br>
	
			
			<div class="col-xs-6 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                  <a href="https://www.facebook.com/ritika.shukla.982">  <img src="img/ritika.jpg" alt="Ritika Shukla"></a>
                </div>
               
                    
                    <h4><b>RITIKA SHUKLA</b></h4>
                    <b>Email-</b><br><p id="hohohe">ritikashukla.shukla@gmail.com</p><br>
					
                        </center>        
            </div><br>
			<div class="col-xs-12 wow bounceIn" data-wow-duration="2s">
               <center> <div class="clientsphoto">
                    <a href="https://www.facebook.com/ayush.kumargupta.18?fref=ts&ref=br_tf"><center><img src="img/ayush.jpg" alt="Ayush"></center></a>
                </div>
               
                    
                    <h4><b>AYUSH KUMAR GUPTA</b></h4>
                    <b>Email-</b><br><p id="hohohe">ayushkg97@gmail.com</p><br>
					
                        </center>        
            </div>
			
			
			
           
    </div><!-- TESTIMONIAL SECTION END -->
       
    <!-- ===========================
    FOOTER START
    =========================== -->    
    
	<div id="features" class="features">
	 <center><h2>SUGGESTIONS</h2></center>
   <form action="backend.php" method="post">
  <div class="form-group">
    <center><label for="exampleInputEmail1">Name</label></center>
    <input type="name" name="username" class="form-control" id="exampleInputEmail1" placeholder="John Doe">
  </div> 
  <div class="form-group">
   <center> <label for="exampleInputEmail1">Email address</label></center>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="someone@domain.com">
  </div>
  <div class="form-group">
    <center><label for="exampleInputMsg">Suggestions</label></div></center>
    <textarea class="form-control" placehoder="Suggestions" rows="3" name="suggestions"></textarea>
  
 <center> <input type="submit" class="btn btn-info"></center>
 </form>
	</div>
    
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