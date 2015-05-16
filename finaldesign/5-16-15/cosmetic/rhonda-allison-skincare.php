<!DOCTYPE html>
<html>
	<head>
		<title>Rhonda Allison Skincare - CanopyMD</title>

<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Rhonda Allison Skincare</h1>
				<p>Rhonda Allison Skin Care offers a wide array of plant-based enzyme products to accommodate all of your skin care needs.</p> 
				<p>At CanopyMD, we also specialize in Rhonda Allison facials that are customized just for you! All facials are 60 minutes and include cleansing, steaming, exfoliating, extracting, and a massage.</p> 
				<p>Kick back and relax, and allow our licensed Esthetician to pamper you. Book your appointment today, and have beautiful skin tomorrow!</p> 
				<p>Please call us to schedule at (815) 226-9642. </p>			
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