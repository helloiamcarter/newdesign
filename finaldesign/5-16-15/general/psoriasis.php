<!DOCTYPE html>
<html>
<head>
    <title>Psoriasis - CanopyMD</title>

<?php
$links = file_get_contents("../include.txt");
$includes = explode("~",$links);
echo $includes[0]; ?>

    <div id="text">
        <h1>Psoriasis</h1>
        <p>Psoriasis is a skin condition that creates red patches of skin with white, flaky scales. It most commonly occurs on the elbows, knees and trunk, but can appear anywhere on the body. The first episode usually strikes between the ages of 15 and 35.</p> 
		<p>It is a chronic condition that will then cycle through flare-ups and remissions throughout the rest of the patient's life. Psoriasis affects as many as 7.5 million people in the United States. About 20,000 children under age 10 have been diagnosed with psoriasis.</p>
		<p>Psoriasis is a genetic disease (it runs in families), but is not contagious. There is no known cure or method of prevention. Treatment aims to minimize the symptoms and speed healing. A number of different methods may be used, such as over-the-counter medications, prescription topical treatments and light therapy/phototherapy.</p> 
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