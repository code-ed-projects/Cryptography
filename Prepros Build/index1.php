 <?php
			  session_start();
			  $z=$_SESSION["inject"];
			  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
 .modal.modal-wide .modal-dialog {
  width: 90%;
}
  #a1
  {width:150px; height:150px;  background: linear-gradient(to bottom right, red , blue);font-size:100px; border-radius:600px;}
  #a2
  {width:150px; height:150px;  background: linear-gradient(to bottom right, green , yellow);font-size:100px; border-radius:600px;}
  #a3
  {width:150px; height:150px;  background: linear-gradient(to bottom right,  yellow , brown);font-size:100px; border-radius:600px;}#a4
  {width:150px; height:150px;  background: linear-gradient(to bottom right, #CCFFFF,  #00008B);font-size:100px; border-radius:600px;}#a5
  {width:150px; height:150px;  background: linear-gradient(to bottom right, white ,purple);font-size:100px; border-radius:600px;}#a6
  {width:150px; height:150px;  background: linear-gradient(to bottom right, yellow , orange);font-size:100px; border-radius:600px;}
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
                            <span class="glyphicon glyphicon-copyright-mark"></span>&nbsp;Code-Ed</a></div>

                      <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li><a href="#history"><b><span class="glyphicon glyphicon-time"></span></b>&nbsp;History</a></li>
                        <li><a href="#contest"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Contest </a></li>
                        <li><a href="#articles"><span class="glyphicon glyphicon-send"></span>&nbsp;Articles</a></li>
                        <li class="active"><a href=""><span class="btnicon icon-cloud-download"></span>Reload:</a></li>
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
              <h2 class="wow fadeInDown" data-wow-duration="2s">Cryptography-Since When? </h2>

              <p>Cryptography has been there since the origin of communication i.e. that of time!              </p>
              <p>ddksldsdnsajsdjkbhsdbabdjjjjjjjjjjjjjjjjjjjjjjsdjnsd</p>
              <p>sdlsdlkaslkmmdksmlksmlksdlkasdk</p>
              <p>sdkndsklnsdlknasdlk</p>
              <p>  <a class="dribbble-follow-button wow bounce" href="http://dribbble.com/srizon">Follow</a> </p>
           </div>
            <!-- ABOUT INFO END -->
             
            
            <div class="myapps row">
                <h5>Tools and apps I use everyday:</h5>
                
                <ul><!-- FAVORITE APP ICONS START -->
                    <li><img class="wow animated bounceInUp" data-wow-duration="1s" src="img/photoshop.svg" alt="Photoshop"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="2s" src="img/illustrator.svg" alt="Illustrator"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="3s" src="img/flash.svg" alt="Adobe Flash"></li>
                    <li><img class="wow animated bounceInUp" data-wow-duration="4s" src="img/after_effects.svg" alt="After Effects"></li>
                    <li><img class="wow bounceInUp" data-wow-duration="5s" src="img/indesign.svg" alt="InDesign"></li>
                </ul><!-- FAVORITE APP ICONS END -->
            </div>
         </div><!-- LEFT PART OF THE ABOUT SECTION END -->
        <!--Left part end-->
         
         <!-- RIGHT PART OF THE ABOUT SECTION -->
         <div class="col-md-6 wow fadeInUp myphoto" data-wow-duration="6s">
             <img style="height:600px; width:550px;" src="img/user.jpg" alt="Mamun Srizon">
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
		<h2>SCORE BOARD TILL NOW</h2><br>
        <?php echo $z;
		$_SESSION['inject']="";?><div class="row wow">

              <?php
			  
			 
			  
		$sql="SELECT * FROM thereal1 ORDER BY liked DESC LIMIT 6 ";          
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) 
		{
				$i=1;$o=1;		
			// output data of each row
			while($row = $result->fetch_assoc()) 
			{   if($i==3 || $i==1)
			    {echo "<div class='row'>";}
				echo "
				<div class='col-xs-4 col-md-4 col-sm-4 col-lg-4 wow fadeInUp' data-wow-duration='3s'>
                <center><button class='responsive'id='a".$i."'>
				<b>".$i."</b>
				</button></center><h3>".$row['title']."</h3>
				<h5><b>By-".$row['name']."</b></h5>
				 <p><center>
				 
							<span class='col-xs-6'>	
	<form action='like1.php'   method='post'>
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='like' value='".$row['liked']."' />
	<span class='badge'>".$row['liked']."</span>&nbsp;&nbsp;
	<input type='submit' class='btn btn-success' value='Like' />
	</form>
	</span>
			 
			<span class='col-xs-6'>	 
	 <form action='dislike.php'  method='post'>		 
	<input type='hidden' name='id' value='".$row['id']."' />
	<input type='hidden' name='dislike' value='".$row['disliked']."' />
	<input type='submit' class='btn btn-danger' value='Dislike".$i."' />
	<span class='badge'>".$row['disliked']."</span>
	</center></p>
	</form> 
	</span>
				
                </div>
				";
			$i++;
			if($i==4 || $i==7)
			{echo "</div>";}}
			
		}
		?>
 <!-- ITEM END -->
        </div>
		<center>
   <a href="all.php"  ><button type="button" class="btn-info" style="width:80px; height:80px; border-radius:400px;">Show all</button></a>
   </center><!-- SERVICE ITEMS END-->
    </div><!-- SERVICE SECTION END -->
   </div> 
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
    <div class="col-sm-6 wow bounceIn" data-toggle="modal" data-target="#myModal2"data-wow-duration="5s">
      
	  <div id="a"><h1>CRYPTOGRAPHY IN C++</h1><b><hr></b>
					<p>Base cryptographic functions provide the most flexible means of developing cryptography applications.. All communication with a cryptographic service provider (CSP)........</p><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">50</span></p></div>
					
					
	
					
      <div class="row wow bounceIn">
        <div class="col-sm-6 wow bounceIn"data-wow-duration="5s">
          <div id="z"><h3>The theory odfdgfgd Everything!!</h3><hr>
					<p>This fdagdfgsfgs dfgdsg r f grd f dr f drd f hrt dskjf lksj iselk jlksdji elksej liesj ile htf tf t gf t tf g t g t tfsd ds ds se ge eewert......</p>
					<p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">530</span></p>
        </div></div>
        <div class="col-sm-6 bounceIn" data-wow-duration="5s">
          <div id="z"><h3>The theory odfdgfgd Everything!!</h3><hr>
					<p>This fdagdfr fd r f g jlksdf kljdfie jkldjie lkjsldkj ie drd f hrthtf tf t gf t tf g t g t tfsd ds ds se ge ewwwer ewewewert......</p><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">50</span></p>
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
      <div class="modal-footer"><center><p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">250</span></p></center>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div><BR>

<div class="row">
<div class="col-md-3 wow bounceIn" data-toggle="modal" data-target="#myModal6"data-wow-duration="5s">
          <div id="z"><h3>UNDERSTANDING CRYPTOGRAPHY</h3><hr>
					First every single letter can be identified through a number of any means so a discussion about words and numbers can be contracted to a discussion of numbers, let's say a bucket of 1s and 0s as in computers.
					<p id="o"> VIEWS<span class="glyphicon glyphicon-flag"></span><span class="badge">530</span></p>
        </div></div>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
			<!--REFER TO THE js/drifolio.js-->
        </div><!-- PORTFOLIO ITEMS END -->
        
        <!--Replace the URL below with your dribbble profile URL-->
        <a class="btn btn-default wow fadeInUp" href="http://dribbble.com/srizon" role="button">
            <button type="button"class="btn-success btn-large" style="width:100px; height:100px; border-radius:25px; ">VIEW ALL</button>
            
        </a> 
    </div><!-- PORTFOLIO SECTION END -->

    <!-- ===========================
    TESTIMONIAL SECTION START
    =========================== -->
    <div id="testimonials" class="container">
        <div class="sectionhead wow bounceInUp" data-wow-duration="2s">
           <span class="bigicon icon-bubbles"></span>
           <h3>This is what I love to listen</h3>
           <h4>Expedita nobis natus doloribus blanditiis quos, atque voluptatem, veritatis soluta eveniet ea!</h4>
           <hr class="separetor">            
        </div><!-- TESTIMONIAL SECTIONHEAD END -->
        
        <!-- TESTIMONIAL ITEMS START -->
        <div class="row">
            <!-- 1ST TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <img src="img/dan.jpg" alt="Dan">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.</p>                        
                    </blockquote>
                    <h5>Dan Cederholm</h5>
                    <p>Co-Founder, Dribbble</p>
                </div>                
            </div><!-- 1ST TESTIMONIAL ITEM END -->
            
            <!-- 2ND TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/bill.jpg" alt="Bill">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et. lorem</p>                        
                    </blockquote>
                    <h5>Bill S Kenney</h5>
                    <p>Art Director at Focus Lab LLC.</p>
                </div>                
            </div><!-- 2ND TESTIMONIAL ITEM END -->
            
            <!-- 3RD TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="3s">
                <div class="clientsphoto">
                    <img src="img/eric.png" alt="Eric">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.</p>                        
                    </blockquote>
                    <h5>Eric Hoffman</h5>
                    <p>Principal Designer, JellyJar</p>
                </div>                
            </div><!-- 3RD TESTIMONIAL ITEM END -->
            
            <!-- 4TH TESTIMONIAL ITEM -->
            <div class="col-md-6 wow bounceIn" data-wow-duration="2s">
                <div class="clientsphoto">
                    <img src="img/ramil.jpg" alt="Ramil">
                </div>
                
                <div class="quote">
                    <blockquote>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia et pariatur ipsam tempora officia ea iusto expedita, nulla, hic odit saepe repellat nesciunt dolorum, officiis laborum ad, aliquam. Quos, et.</p>                        
                    </blockquote>
                    <h5>Ramil Derogongun</h5>
                    <p>Visual Designer, Bluroon</p>
                </div>                
            </div><!-- 4TH TESTIMONIAL ITEM END -->
        </div>        
    </div><!-- TESTIMONIAL SECTION END -->
       
    <!-- ===========================
    FOOTER START
    =========================== -->    
    <footer>
        <div class="container">
            <span class="bigicon icon-speedometer "></span>
             
            <div class="footerlinks"><!-- FOOTER LINKS START -->            
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>

                    <!--replace the email address below with your email address-->
                    <li><a href="mailto:m@creatrix.us">Contact</a></li>                   
                </ul>
            </div><!-- FOOTER LINKS END -->
             
            <div class="copyright"><!-- FOOTER COPYRIGHT START -->
                <p><a href="#">Drifolio</a> stands for Dribbble-Portolio. This is a free HTML template designed and coded by <a href="http://evenfly.com">EvenFly Team</a>. All logo and images in this template used for preview purpose only. You are free to use the template but make sure to use your own images.</p>
            </div><!-- FOOTER COPYRIGHT END -->
             
            <div class="footersocial wow fadeInUp" data-wow-duration="3s"><!-- FOOTER SOCIAL ICONS START -->
                <ul>
                    <li><a href="http://facebook.com/MamunSrizon"><span class="icon-social-facebook"></span></a></li>
                    <li><a href="http://twitter.com/MamunSrizon"><span class="icon-social-twitter"></span></a></li>
                    <li><a href="#"><span class="icon-social-youtube"></span></a></li>
                    <li><a href="http://dribbble.com/srizon"><span class="icon-social-dribbble"></span></a></li>
                    <li><a href="#"><span class="icon-social-tumblr"></span></a></li>
                 </ul>
             </div><!-- FOOTER SOCIAL ICONS END -->
         </div>
     </footer><!-- FOOTER END -->
    
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