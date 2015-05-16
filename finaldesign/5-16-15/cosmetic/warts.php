<!DOCTYPE html>
<html>
<head>
    <title>Warts - CanopyMD</title>

<?php
$links = file_get_contents("../include.txt");
$includes = explode("~",$links);
echo $includes[0]; ?>

    <div id="text">
        <h1>Warts</h1>
        <p>Warts are caused from the human papillomavirus, or the HPV family. Because the virus lives within our body, warts appear over time in various places such as the hands, legs and feet, etc.</p>
        <p>When methods such as freezing, topical solutions and home remedies fail, don’t give up! We have a solution at CanopyMD. Here in our office we treat warts with our <a href="sciton.php">Sciton Spot Destruction Laser treatment.</a></p>
        <p>The laser works to induce an “injury” to the wart that causes the body to self heal. Appointments are brief and done by our versed professionals. To learn more schedule a medical appointment today with one of our providers at CanopyMD. View our before & after photos!</p>
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