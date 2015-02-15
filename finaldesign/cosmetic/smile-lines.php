<!DOCTYPE html>
<html>
	<head>
		<title>Smile Lines - CanopyMD</title>

<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Smile Lines</h1>
				<p>Smile lines or marionette lines begin at the corners of the mouth and extend downward to the chin. These creases are caused from loss of collagen, genetics, and lifestyle decisions.</p> 
				<p>At CanopyMD we often fill these areas with injectable products such as <a href="juvederm.php">Juvederm</a>, <a href="radiesse.php">Radiesse</a>, or <a href="sculptra.php">Sculptra</a>. While Sculptra offers a more subtle and slower change, Juvederm and Radiesse show instantaneous results.</p> 
				<p>For more permanent results we offer <a href="micro-laser-peels.php">MicroLaser Peels</a>, <a href="profractional-laser-treatments.php">Profractional Laser treatments</a>, and <a href="laser-resurfacing.php">Laser Resurfacing</a>. All of the above laser treatments require downtime that varies according to your treatment plan.</p>  
				<p>To learn more and gauge your expectations accurately schedule your free cosmetic consultation at CanopyMD today! </p> 
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