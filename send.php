<html>
<body>

<p>Required fields are <b>bold</b></p>

<form action="contactsend.php" method="post">
<p><b>Your Name:</b> <input type="text" name="naam" /><br />
<b>Subject:</b> <input type="text" name="onderwerp" /><br />
<b>E-mail:</b> <input type="text" name="email" /><br />
bedrijf: <input type="text" name="bedrijf"></p>
straat: <input type="text" name="straat"></p>
postcode: <input type="text" name="postcode"></p>
gemeente: <input type="text" name="gemeente"></p>
land: <input type="text" name="land"></p>
telefoon: <input type="text" name="telefoon"></p>


<p>Do you like this website?
<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
<input type="radio" name="likeit" value="No" /> No
<input type="radio" name="likeit" value="Not sure" /> Not sure</p>

<p>How did you find us?
<select name="how">
<option value=""> -- Please select -- </option>
<option>Google</option>
<option>Yahoo</option>
<option>Link from a website</option>
<option>Word of mouth</option>
<option>Other</option>
</select>

<p><b>Your comments:</b><br />
<textarea name="bericht" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Send it!"></p>

<p> </p>
<p>Powered by <a href="https://myphpform.com">PHP form</a></p>

</form>

</body>