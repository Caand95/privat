<h1>Kontakt mig over mail:</h1>
<h5>Ved at udfylde formularen nedenfor.</h5> <br>
<?php
//include "txt/kontakt.txt";
?>

<form class="Contactform" action="" method="POST">
	<h5>Dit navn:</h5><input type="text" name="forname" value="" style="width:80px;">
	<input type="text" name="eftername" value="" style="width:80px;">
	<h5>Din mail:</h5><input type="email" name="mail" value="" style="width:160px;">
	<br><br>
	<h5>Ønsket behandling:</h5>
	<h5 class="radio">Akupunktur:</h5><input type="radio" name="type" value="Akupunktur">
	<h5 class="radio">Message:</h5><input type="radio" name="type" value="Message">
	<h5 class="radio">Zoneterapi:</h5><input type="radio" name="type" value="Zoneterapi">
	<h5 class="radio">Ansigtsskraberi:</h5><input type="radio" name="type" value="Ansigtsskraberi">
	<br><br>
	<h5>Fritekst:</h5><textarea rows="5" name="text" cols="30"></textarea>
	<input type="submit" value="Indsend" class="btn kontaktbtn">
</form>

<?php

if (isset($_POST['forname']) && isset($_POST['eftername']) && isset($_POST['mail']) && isset($_POST['handle']) && isset($_POST['text'])) {
	$fname=$_POST['forname']." ".$_POST['eftername'];
	$fmail=$_POST['mail'];
	$tmail="caand95@gmail.com";
	$type=$_POST['type'];
	$text=$_POST['text'];
	$message = $fname." har sendt følgende:"."\n\n".$text."\n";
	$message2 = "Oplysninger fra sender:"."\n".$fname."\n".$fmail."\n";
	$message3 = "Her er din kopi af din besked.";

	$headers = "Fra:".$fmail;
	$headers2 = "Til:".$tmail;
	mail($tmail,$message,$message2,$headers);
	mail($fmail,$message3,$message2,$headers2);


}

?>