<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Fine Lip Lines</h1>
				<p>At CanopyMD we treat fine lip lines with a couple different methods. Fine lip lines are often caused from puckering the lips, smoking or genetics.</p> 
				<p>One method that offers instantaneous results through injections is <a href="juvederm.php">Juvederm Ultra</a>. All injectable options often result in bruising which can last 1-2 weeks. A more permanent solution for fine lip lines is <a href="micro-laser-peels.php">MicroLaser Peels</a>, <a href="profractional-laser-treatments.php">Profractional Laser treatments</a>, or <a href="laser-resurfacing.php">Laser Resurfacing</a> of the area.</p>
				<p>All of our lasers are accurate down to the micron but do require some downtime that varies according to your treatment plan. Our laser treatments work to even your skins texture and eliminate fine lines. To learn more schedule your free consultation today at Canopy MD!</p> 
				<p>View our before & after photos!</p> 
			</div>
			<table id="center">
				<tr>
					<td id="logopic">
						<img src="/logo2.png" />
						<img src="/6.jpg" />
					</td>
				</tr>
			</table>
			
<?php echo $includes[1]; ?>