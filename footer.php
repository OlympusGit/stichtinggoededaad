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
		<form action="https://stichtinggoededaad.com/mollie-api-php-master/examples/01-new-payment.php" method="post">
		<div class="text">
		&euro; <input onkeypress="return isNumberKey(event)" type="text" name="amount" required>
		</div>

		<br>
		<br>
		<div class="text">
			<input style="margin-left: auto; margin-bottom: auto; color: white;" type="submit" value="Verzenden">
		</div>
	</form>
	</div>
	</div>
	</div>
			</div>
			<div class="col-md-2 footer-top">
				<h3 style="font-size: 16px;">SITEMAP </h3>
				<ul>
					<li><a style="color: white;" href="/"> HOME</a></li>
					<li><a style="color: white;" href="projecten"> PROJECTEN</a></li>
					<li><a style="color: white;" href="events"> EVENTS</a></li>
					<li><a style="color: white;" href="vrijwilligers"> VRIJWILLIGERS</a></li>
					<li><a style="color: white;" href="fondsenwerving"> FONDSENWERVING</a></li>
					<!-- <li><a href="about"> ABOUT</a></li> -->
					<!-- <li><a href="give"> DONATE</a></li> -->
					<!-- <li><a href="whatwedo"> WHAT WE DO</a></li> -->
					<!-- <li><a href="give"> GIVE</a></li> -->
					<li><a style="color: white;" href="contact"> CONTACT</a></li>
				</ul>
				<div class="clear fix"> </div>
			</div>
			<div class="col-lg-3 footer-top">
				 <h3 style="font-size: 16px;">VOLG ONS OP:</h3>
		       		<a style="color: #333;" href="https://www.linkedin.com/in/stichting-goede-daad-924662160" target="_blank"><i style="font-size: 80px; margin-left: 20px;" class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		       		<a style="color: #333;" href="https://twitter.com/DaadGoede" target="_blank"><i style="font-size: 80px; margin-left: 20px;" class="fa fa-twitter-square" aria-hidden="true"></i></a>

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
				ING: BE90 3631 6995 2932 
				<br> BIC: BBRUBEBB</p>

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
				<p style="color: #45b5db;">&copy 2017 Stichtinggoededaad. created by <a href="#">JMarkiet</a></p>
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
<script type="text/javascript">
	
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }

</script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
<html>