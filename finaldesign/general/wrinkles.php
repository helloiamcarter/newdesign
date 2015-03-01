<!DOCTYPE html>
<html>
	<head>
		<title>Wrinkles - CanopyMD</title>


<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Wrinkles</h1>
				<p>Wrinkles are a natural part of the aging process. They occur most frequently in areas exposed to the sun, such as the face, neck, back of the hands and forearms. Over time, skin gets thinner, drier and less elastic. Ultimately, this causes wrinkles - either fine lines or deep furrows. In addition to sun exposure, premature aging of the skin is associated with smoking, heredity and skin type (higher incidence among people with fair hair, blue-eyes and light skin).</p>
				<p>Treatment for wrinkles runs the gamut from topical creams and moisturizers to cosmetic procedures. The most common treatments are alpha-hydroxy acids, antioxidants, moisturizers and vitamin A acid. The best best prevention for wrinkles is to keep the skin moisturized and use sunscreen and sunblock to prevent additional damage.</p>
				<p><a href="/contact.php">Contact Us</a> to schedule an appointment!</p>
			</div>
			<table id="center">
				<tr>
					<td id="logopic">
						<a href="/"><img src="/logo2.png" alt="CanopyMD logo Loves Park dermatology" /></a>
						<img src="/6.jpg" />
					</td>
				</tr>
			</table>
			
<?php echo $includes[1]; ?>
