<!DOCTYPE html>
<html>
	<head>
		<title>Dermaplaning - CanopyMD</title>

<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Dermaplaning</h1>
				<p>Dermaplaning is a great treatment to painlessly remove blonde, grey, or white “peach-fuzz” facial hair.</p> 
				<p>The dermaplaning procedure also exfoliates your skin leaving it extremely smooth! Our licensed Esthetician completes this relaxing procedure by carefully gliding a precision blade over the skin.</p>
				<p>Overall, the process typically takes 30 minutes to complete. Dermaplaning may be completed every 4-6 weeks, or as needed. Call (815) 226-9642 to schedule an appointment!</p>			
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