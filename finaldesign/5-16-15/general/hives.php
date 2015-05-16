<!DOCTYPE html>
<html>
	<head>
		<title>Hives - CanopyMD</title>


<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Hives</h1>
				<p>Hives are characterized as itchy red, raised welts (also known as wheals) on the skin's surface that can spread or join together and form larger areas of raised lesions. They are generally triggered by exposure to an allergen or chemical irritant. They tend to appear suddenly and often disappear equally as suddenly.</p>
				<p>Hives are usually an allergic reaction to food, medicine or animals. They can also be triggered by sun exposure, stress, excessive perspiration or other, more serious diseases, such as lupus. Anyone can get hives. They are harmless and non-contagious. Hives may itch, burn or sting. They rarely need medical attention as they tend to disappear on their own. However, in persistent cases, your dermatologist may prescribe antihistamines or oral corticosteroids. The best way to prevent hives is to discontinue exposure to the allergic irritant.</p>
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
