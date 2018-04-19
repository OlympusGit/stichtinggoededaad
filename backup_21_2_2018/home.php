<!DOCTYPE html>
<html>
<head>
<title>Stichting Goede Daad</title>
<meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css.css">
<script type="text/javascript">
	
	<?php session_start();

	if(!isset($_SESSION['UserData']['Username'])){
		header("location:login.php");
		exit;
	}
	?>

</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--web-fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<style type="text/css">

	.lel {
			border: 1px solid white;
			padding-left: 20px;
			padding-top: 20px;
			color: white;
		}

	@media screen and (min-width: 680px) {

  .dude {
    max-width: 680px;
  }

}

@media screen and (min-width: 480px) {

  .dude2 {
    max-width: 480px;
  }

}

header[role="banner"] #logo-main {
  display: block;
  margin: 20px auto;
  margin-bottom: -30px;
}
#navbar-primary.navbar-default {
  background: transparent;
  border: none;
}
#navbar-primary.navbar-default .navbar-nav {
  width: 100%;
  text-align: center;
}
#navbar-primary.navbar-default .navbar-nav > li {
  display: inline-block;
  float: none;
}
#navbar-primary.navbar-default .navbar-nav > li > a {
  padding-left: 30px;
  padding-right: 30px;
}
.navbar {
	padding-bottom: 0;
}

ul.navbar-collapse {
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: #333;
    position: fixed;
    top: 0;
    width: 100%;
}

ul.navbar-collapse li {float: left;}

ul.navbar-collapse li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

ul.navbar-collapse li:hover a:not(.active) {
    background-color: #D3D3D3;
    color: #000;
}

ul.navbar-collapse li a.active {
    background-color: #D2691E;
    color: white;
}

ul.navbar-collapse li.right {float: right;}

@media screen and (max-width: 600px){
    ul.navbar-collapse,
    ul.navbar-collapse {position: unset}
    ul.navbar-collapse li.right, 
    ul.navbar-collapse li {float: none;}
}

ul.navbar-collapse .dropdown-content {
  display: none;
  position: absolute;
}
ul.navbar-collapse .dropdown-content a {
  color: black;
}
ul.navbar-collapse .dropdown:hover > .dropdown-content {
  display: block;
}

}
</style>

</head>
<body>
<!--header start here-->
<!-- <div class="mother-grid" style="margin-top: 80px;"> -->
	<!-- <div class="container"> -->
		<!-- <div class="header"> -->	
			<!-- <div class="header-left">
				   <a href="index.html"> <img src="images/logo.png" style="width: 40%; height: 40%;"> </a>
			</div>
			<span class="menu"> <img src="images/icon-1.png"></span> -->
			<!-- <div class="clear"> </div>
			<div class="header-right"> -->
	<nav class="navbar navbar-inverse">
<header role="banner">
  <img id="logo-main" src="images/logo.png" width="200" alt="Logo Thing main logo">
<nav id="navbar-primary" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="navbar-primary-collapse">
      <ul class="nav navbar-nav" style="margin-bottom: 10px;">
        <li class="active"><a href="home.php">HOME</a></li>
        <li><a href="projecten.html">PROJECTEN</a></li>
        <li><a href="events.html">EVENTS</a></li>
        <li><a href="vrijwilligers.html">VRIJWILLIGERS</a></li>
        <li><a href="fondsenwerving.html">FONDSENWERVING</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</header><!-- header role="banner" -->
</nav>
	<script>
			$( "span.menu").click(function() {
		$(  "ul.res" ).slideToggle("slow", funion() {
		 // Animation complete.
			});
			});
	</script>

<!--/header end here-->
<!--banner start here-->
	
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
		
	<div class="dude" style="
  margin: 10px auto;
  margin-top: -20px;
  margin-bottom: 20px;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;">
		<h1 style="text-align: center; margin-bottom: 35px; font-weight: bold; color: #ec4700;">"Maak kennis met ons"</h1>
		
<p>
	Wij zijn een jonge stichting, die als schakel fungeert tussen mensen die iets te <br> bieden hebben en de mensen die met uw bijdrage kunnen worden geholpen.
</p>

<br>

<p>
	Sociaal zwakkeren, kwetsbare groepen, zorginstellingen, opvang- en <br> kindertehuizen, sportverenigingen, scholen, weeskinderen, particuliere <br>hulpbehoevenden en sociale ondernemers, komen in aanmerking voor de goede <br> daad projecten van de stichting.
</p>

<br>

<div style="text-align: left;">
		<p>Onze projecten worden onderverdeeld in 3 categorieen:</p>
	<ul>
	   <li>Sociaal maatschappelijk</li>
	   <li>Kunst en Cultuur </li>
	   <li>Business to business</li>
	</ul>
</div>

<br>
<br>

<p>
	<strong>Sociaal maatschappelijke projecten</strong>
</p>

<br>

<p>
	Wij trachten op verschillende manieren onze doelen te bereiken door onder <br> meer:
</p>

<div style="text-align: left;">
	<ul>
	   <li>het inzamelen van goederen</li>
	   <li>het organiseren van leuke activiteiten met en voor onze doelgroepen </li>
	   <li>een helpende hand bieden </li>
	</ul>
</div>

<br>

<p>
	Denk hierbij ook aan het vergaren van kennis op een professionele wijze en deze <br>knowhow stellen wij ter beschikking aan jongeren, instellingen, organisaties en <br>bedrijven.
</p>

<br>
<br>

<p>
	<strong>Business to business projecten</strong>
</p>

<br>

<p>
	In deze categorie functioneren wij als een tussenschakel van bedrijven. De <br> 
	handelsrelatie staat daarbij centraal.
</p>

<br>

<p>
	De stichting wilt hiermee laten zien hoe commerciele activiteiten en <br> maatschappelijke doelen elkaar kunnen versterken.
</p>

<br> 

<p>
	Wij zijn aanjager van de groeiende beweging van sociaal ondernemers die <br> werken aan de economie, waarin voor iedereen winst wordt gecreeerd. 
</p>

<br>

<p>	
	Voor goede doelen en vrijwilligersprojecten was geld verdienen lange tijd taboe. <br> Door de veranderende wereld en nieuwe inzichten, gaan steeds meer <br>burgerinitiatieven op zoek naar een verdienmodel. Sociale groepen zijn veel <br> minder afhankelijk van subsidies en fondsen, vanwege hun initiatieven die leiden <br> tot business to business.
</p>

<br>

<p>
	Kortom...wij willen mensen inspireren, met elkaar verbinden en versterken om <br>zakelijke ideeen te realiseren voor een duurzame impact.
</p>

<br>
<br>
	
<p>
	<strong>Kunst en cultuur projecten</strong>
</p>

<br>

<p>
	Onze kunst en cultuur projecten bieden mensen de mogelijkheid zichzelf <br> creatief uit te drukken, wat zorgt voor zingeving en verbinding met <br> anderen. Het helpt de samenleving hun emoties te uiten, maar ook <br> inspiratie en troost te ervaren.
</p>

<br>

<p>
	In de vorm van theater, dans en muziek, willen wij deze projecten tot een <br> succes maken.
</p>

<br>
<br>

<p style="margin-left: 12%; font-style: italic;">
	<strong style="margin-left: 23%;">"Social movement" <br>
	<span style="margin-left: -16%;">Millions are suffering in silence. It's time we drag this epidemic out into the light.</span> <br>
	<span style="margin-left: 18%;">That makes the difference!!</span></strong>
</p>

<br>
<br>

<p>
	Met onze projecten hoopt de stichting in samenwerking met u en de bevoegde  <br>instanties, jaarlijks een steentje bij te dragen aan de gemeenschap.
</p>

<br>

<p>
	Onze sociale partners....daar is waar we het voor doen!!
</p>

</div>

<!--top grid start here-->
<!-- <div class="grid">
	<div class="container">
		<div class="row grid-main">
			 <div class="grid-top">
				   <div class="col-md-4 grid-column">
				 	 	<img src="images/help.png">
				 	 	<h3>HELP ONS</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
				   </div>
				   <div class="col-md-4 grid-column">
				 	 	<img src="images/donate.png">
				 	 	<h3>DONATE</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
				   </div>
				   <div class="col-md-4 grid-column">
				 	 	<img src="images/email.png">
				 	 	<h3>NEEM CONTACT MET ONS OP</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
				   </div>
				<div class="clearfix"> </div>
			 </div>
			 <div class="grid-bottom">
			 	   <div class="col-md-4 grid-column">
				 	 	<img src="images/give.png">
				 	 	<h3>GEVEN</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
				   </div>
				   <div class="col-md-4 grid-column">
				 	 	<img src="images/what.png">
				 	 	<h3>WAT WE DOEN</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud  </p>
				   </div>
				   <div class="col-md-4 grid-column">
				 	 	<img src="images/about.png">
				 	 	<h3>OVER ONS</h3>
				 	 	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
				   </div>
				<div class="clearfix"> </div>
			 </div>
		</div>
	</div>
</div> -->
<!--/top grid end here-->
<!-- Slideshow 4 -->
<!-- 			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <div class="banner">
						<div class="container">
							<div class="banner-main">
								<h2> LOREM<br>IPSUM</h2>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud".</p>
								<a href="#">DONATE</a>
							</div>
						</div>
					</div>
			        </li>
			        <li>
			          <div class="banner-two">
						<div class="container">
							<div class="banner-main">
								<h2> LORUM IPSUM</h2>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud".</p>
								<a href="#">DONATE</a>
							</div>
						</div>
					</div>
			        </li>
			        <li>
			          <div class="banner-three">
						<div class="container">
							<div class="banner-main">
								<h2> LORUM<br>IPSUM</h2>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br> incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud". </p>
								<a href="#">DONATE</a>
							</div>
						</div>
					</div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div> -->
	  			<!--- banner Slider Ends Here --->

	  			<!--services start here-->


<div class="container" style="height: auto; max-width: 100%; width: 550px;">
 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/goededaad2.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="images/test1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>Chicago</h3>
          <p>Thank you, Chicago!</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="images/test2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
         <!--  <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="images/test3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="images/test4.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
         <!--  <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="images/test5.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="images/test6.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <!-- <h3>New York</h3>
          <p>We love the Big Apple!</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<br>
<br>


	<div class="dude" style="
  margin: 10px auto;
  margin-top: -20px;
  margin-bottom: 20px;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;">
		
<p>
	Ons platform is mede bedoeld voor nieuwe technologische toepassingen in diverse branches (ICT, beveiliging, energie, land- en tuinbouw, veeteelt etc.), alsook voor kunst en cultuur, verschillende workshops, en events.
</p>


</div>


<div class="dude2" style="margin: 10px auto;">
	<video preload="metadata" controls="" style="max-width: 100%;" poster="images/poster.png"> 
		<source src="videos/video.mp4" type="video/mp4" >
	</video>
</div>

<br>

	<div class="dude" style="
  margin: 10px auto;
  margin-top: -20px;
  margin-bottom: 20px;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;">
		
<p>
	Dit filmpje is van toepassing op alle Zuid-Amerikaanse inheemsen, die zich staande moeten weten te houden, ondanks de vaak meervoudigediscriminatie en geringe ontwikkelingskansen die hen geboden worden.
</p>

<br>

<p>
	Hoe kan er worden bijgedragen om iets voor deze inheemsen te betekenen, zodat ze in hun leefgebied aan tuinbouw kunnen doen om te overleven en op een innovatieve en efficiente manier de productiviteit te garanderen?
</p>


</div>
	</div>


<br>
<br>
<br>

<!--/services end here-->
<!--video-banner start here-->
<!--pop-up-box-->
					  <script type="text/javascript" src="js/modernizr.custom.53451.js"></script>  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--pop-up-box-->

<!--/video-banner end here-->

</div>

<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 footer-top">
				<h3 style="font-size: 16px;">OPEN DONATIE</h3>
		<div class="contact-main">
	<div class="lel">
		<h4>Helpt u een handje mee?</h4>
		<br>
		<div class="text">
		&euro; <input type="text" name="betalen">
		</div>
		<br>
		<br>
		<div class="text">
			<input style="margin-left: auto; margin-bottom: auto; color: white;" type="submit" value="Verzenden">
		</div>
	</div>
	</div>
	</div>
			</div>
			<div class="col-md-2 footer-top">
				<h3 style="font-size: 16px;">SITEMAP </h3>
				<ul>
					<li><a style="color: white;" href="home.php"> HOME</a></li>
					<li><a style="color: white;" href="projecten.html"> PROJECTEN</a></li>
					<li><a style="color: white;" href="events.html"> EVENTS</a></li>
					<li><a style="color: white;" href="vrijwilligers.html"> VRIJWILLIGERS</a></li>
					<li><a style="color: white;" href="fondsenwerving.html"> FONDSENWERVING</a></li>
					<!-- <li><a href="about.html"> ABOUT</a></li> -->
					<!-- <li><a href="give.html"> DONATE</a></li> -->
					<!-- <li><a href="whatwedo.html"> WHAT WE DO</a></li> -->
					<!-- <li><a href="give.html"> GIVE</a></li> -->
					<li><a style="color: white;" href="contact.html"> CONTACT</a></li>
				</ul>
				<div class="clear fix"> </div>
			</div>
			<div class="col-lg-3 footer-top">
				 <h3 style="font-size: 16px;">VOLG ONS OP:</h3>
		       		<i style="font-size: 80px; margin-left: 20px;" class="fa fa-linkedin-square" aria-hidden="true"></i>
		       		<i style="font-size: 80px; margin-left: 20px;" class="fa fa-twitter-square" aria-hidden="true"></i>

		      <div class="clear fix"> </div>
			</div>
			<div class="col-md-2 footer-top">
				<p><strong>TEL:</strong> +32 (0) 11 81 35 23</p>
				<p style="font-weight: bold"> EMAIL:<a href="mailto:info@stichtinggoededaad.com"> info@stichtinggoededaad.com</a></p>
				<br>
				<h3 style="font-size: 13.25px; font-weight: bold"> STICHTING GOEDE DAAD</h3>
				<p>KVK: 0684.190.268</p>
				<br>
				<br>
				<h3 style="font-size: 13.25px; font-weight: bold;"> BANKGEGEVENS</h3>
				<p>Stichting Goede Daad <br>
				ING: BE90 3631 6995 2932</p>

			</div>
			<div class="clear fix"> </div>
		</div>
	</div>
</div>
<!--/footer end here-->
<!--copyrights start here-->
<div class="copyright">
	<div class="container">
		<div class="copy-right-main">
			<div class="col-md-6 copy-left">
				<p style="color: #45b5db;">&copy 2017 Stichtinggoededaad. by <a href="#">JMarkiet</a></p>
			</div>
			<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
					<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>

<script>
function myFunction() {
    var x = document.getElementById("mynavbar-collapse");
    if (x.className === "navbar-collapse") {
        x.className += " responsive";
    } else {
        x.className = "navbar-collapse";
    }
}
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>