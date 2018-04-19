<?php $title = 'Contact &#8211; Stichting Goede Daad'; ?>
<?php $metaTags = ''; ?>
<?php $currentPage = 'CONTACT'; ?>
<?php include('head.php'); ?>
<?php include('navbar.php'); ?>


<!--contact start here-->
<div style="margin-bottom: 60px;">
	<div class="dude" style="
  margin: 10px auto;
  margin-top: -20px;
  margin-bottom: 20px;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;">
		<div class="contact-main">
			   <h1 style="font-weight: bold; color: #ec4700; text-align: center; font-size: 36px;">Contact</h1>
			   <br>
				<form action="contactsend" method="post">
					<div class="text">
					Naam <span style="color: red;">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input required type="text" name="naam" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div class="text">
					Bedrijf&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="bedrijf" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div class="text">
					Onderwerp<span style="color: red;">*</span><input required style="left: -0.7%; position: relative;" type="text" name="onderwerp" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<br>
					<h2 style="color: #ec4700;">Adres</h2>
					<br>
					
					<div class="text">
					Straat&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="straat" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div class="text">
					Postcode&nbsp&nbsp&nbsp<input type="text" name="postcode" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div class="text">
					Gemeente&nbsp<input type="text" name="gemeente" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div class="text">
					Land&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="land" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<br>
					<h2 style="color: #ec4700;">Telefoon</h2>
					<br>
					<div class="text">
					Telefoon&nbsp&nbsp&nbsp<input type="text" name="telefoon" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' ';}">
					</div>
					<div  class="text">
					E-mail <span style="color: red;">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp<input required type="text" name="email" value="" onfocus="this.value = '';" onblur="if (this.value =='') {this.value = '';}">
					</div>
					<div class="text">
					Bericht <span style="color: red;">*</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea required name="bericht"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					</div>
					<div class="text">
					<input style="background-color: #ec4700;" type="submit" value="Verzenden">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--contact end here-->

<?php include 'footer.php';?>