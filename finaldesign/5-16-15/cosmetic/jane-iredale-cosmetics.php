<!DOCTYPE html>
<html>
	<head>
		<title>Jane Iredale Cosmetics - CanopyMD</title>

<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Jane Iredale Cosmetics</h1>
				<p>Jane Iredale Cosmetics makes it possible for makeup to benefit your skin, while enhancing your beauty and complimenting your best features!</p>
				<p>Jane Iredale Cosmetics specialize in all natural, skin calming products with only the finest ingredients. The company was founded by Jane in 1992 and never fails to impress.</p>
				<p>Allow our professionals to color-match your skin free of charge with this line that has something for everyone.</p> 
				<p>To schedule your complimentary make-up application today, please call us at (815) 226-9642.</p>			
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