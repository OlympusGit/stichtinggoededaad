<?php
/* Set e-mail recipient */
$mijnemail  = "info@stichtinggoededaad.com";

/* Check all form inputs using check_input function */
$naam = check_input($_POST['naam'], "Enter your name");
$onderwerp  = check_input($_POST['onderwerp'], "Write a subject");
$email    = check_input($_POST['email']);
$bedrijf  = check_input($_POST['bedrijf']);
$straat  = check_input($_POST['straat']);
$postcode  = check_input($_POST['postcode']);
$gemeente  = check_input($_POST['gemeente']);
$land  = check_input($_POST['land']);
$telefoon  = check_input($_POST['telefoon']);
$bericht = check_input($_POST['bericht'], "Write your comments");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* If URL is not valid set $website to empty */
// if (!preg_match("/^(https?:\/\/+[\w\-]+\.[\w\-]+)/i", $website))
// {
//     $website = '';
// }

/* Let's prepare the message for the e-mail */
$message = "Mail:

Er heeft iemand gemaild:

Naam: $naam

Bedrijf: $bedrijf


Straat: $straat

Postcode: $postcode

Gemeente: $gemeente

Land: $land


Telefoon: $telefoon

E-mail: $email




Bericht:
$bericht

";

/* Send the message using mail() function */
mail($mijnemail, $onderwerp, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>