<!DOCTYPE html>
<html>
	<head>
		<title>Waxing - CanopyMD</title>

<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Waxing</h1>
				<p>Waxing is done by our licensed Esthetician and offers a speedy solution for stubborn body hair.</p> 
				<p>Not ready to take the laser-technology-plunge? Wax nearly any area to leave your skin silky, smooth and hair free!</p>
				<p>Pricing is very affordable and completed in a private, sanitary setting. Appointments are brief and easy to schedule at (815) 226-9642. </p>			
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