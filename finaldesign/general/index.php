<!DOCTYPE html>
<html>
<head>
    <title>General Dermatology - CanopyMD</title>

<?php
$links = file_get_contents("../include.txt");
$includes = explode("~",$links);
echo $includes[0]; ?>
	<div id="logo-container">
		<a href="/"><img src="/logo2.png" alt="CanopyMD logo Loves Park dermatology" id="logo-list" /></a>
    </div>
	<div id="list">
        <h1>General Dermatology</h1>
			<div class="row">
				<a href="acne.php">
					<img src="images/acne.jpg" alt="acne treatment" class="first" />
				</a>
				<a href="birthmarks.php">
					<img src="images/birthmarks.jpg" alt="birthmark removal" />
				</a>
				<a href="blisters.php">
					<img src="images/blister.jpg" alt="blister treatment" />
				</a>
				<a href="lumps-bumps-cysts.php">
					<img src="images/cyst.jpg" alt="cyst removal" />
				</a>
			</div>
			<div class="text-row">
				<a href="acne.php" class="first">Acne</a>
				<a href="birthmarks.php">Birthmarks</a>
				<a href="blisters.php">Blisters</a>
				<a href="lumps-bumps-cysts.php">Lumps, Bumps, & Cysts</a>
			</div>
			<div class="row">
				<a href="eczema.php">
					<img src="images/eczema.jpg" alt="eczema treatment" class="first" />
				</a>
				<a href="hidradentitis-suppurativa.php">
					<img src="images/hidradentitis-suppurativa.jpg" alt="hidradentitis suppurativa treatment" />
				</a>
				<a href="hives.php">
					<img src="images/hives.jpg" alt="hives treatment" />
				</a>
				<a href="keratosis-pilaris.php">
					<img src="images/keratosispilaris.jpg" alt="keratosis pilaris treatment" />
				</a>
			</div>
			<div class="text-row">
				<a href="eczema.php" class="first">Eczema</a>
				<a href="hidradentitis-suppurativa.php">Hidradentitis Suppurativa</a>
				<a href="hives.php">Hives</a>
				<a href="keratosis-pilaris.php">Keratosis Pilaris</a>
			</div>			
			<div class="row">
				<a href="lichen-simplex-chronicus.php">
					<img src="images/lichen-simplex-chronicus.jpg" alt="lichen simplex chronicus treatment" class="first" />
				</a>
				<a href="lice.php">
					<img src="images/louse.jpg" alt="lice treatment" />
				</a>
				<a href="nail-fungus.php">
					<img src="images/nail-fungus.jpg" alt="nail fungus treatment" />
				</a>
				<a href="poison-ivy.php">
					<img src="images/poison-ivy.jpg" alt="poison ivy treatment" />
				</a>
			</div>
			<div class="text-row">
				<a href="lichen-simplex-chronicus.php" class="first">Lichen Simplex Chronicus</a>
				<a href="lice.php">Lice</a>
				<a href="nail-fungus.php">Nail Fungus</a>
				<a href="poison-ivy.php">Poison Ivy, Oak, & Sumac</a>
			</div>
			<div class="row">
				<a href="pruritus.php">
					<img src="images/pruritus.jpg" alt="pruritus treatment" class="first" />
				</a>
				<a href="psoriasis.php">
					<img src="images/psoriasis.jpg" alt="psoriasis treatment" />
				</a>
				<a href="rash.php">
					<img src="images/rash.jpg" alt="rash treatment" />
				</a>
				<a href="rosacea.php">
					<img src="images/rosacea.jpg" alt="rosacea treatment" />
				</a>
			</div>
			<div class="text-row">
				<a href="pruritus.php" class="first">Pruritus</a>
				<a href="psoriasis.php">Psoriasis</a>
				<a href="rash.php">Rash</a>
				<a href="rosacea.php">Rosacea</a>
			</div>
			<div class="row">
				<a href="scleroderma.php">
					<img src="images/scleroderma.jpg" alt="scleroderma treatment" class="first" />
				</a>
				<a href="vitiligo.php">
					<img src="images/vitiligo.jpg" alt="vitiligo treatment" />
				</a>
				<a href="wrinkles.php">
					<img src="images/wrinkles.jpg" alt="wrinkles treatment" />
				</a>
			</div>
			<div class="text-row">
				<a href="scleroderma.php" class="first">Scleroderma</a>
				<a href="vitiligo.php">Vitiligo</a>
				<a href="wrinkles.php">Wrinkles</a>
			</div>
		</div>
	</div>

<?php echo $includes[1]; ?>