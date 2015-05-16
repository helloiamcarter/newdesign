<!DOCTYPE html>
<html>
<head>
    <title>Hollowing Eyes - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Hollowing Eyes</h1>
        <p>Hollowing around the eyes is the result of fat pads and muscle mass depleting over time. This often makes you appear tired and older than you truly are.</p>
        <p>At CanopyMD, we use injectable filler such as <a href="belotero.php">Belotero</a> to mock the volume you have lost below the eyes. This method of treatment is safe and gives instant improvement.</p>
        <p>All injected fillers may leave bruising which can last 1-2 weeks.  To learn more schedule your free cosmetic consultation today at CanopyMD. View our before & after photos!</p>
    </div>
    <table id="center">
        <tr>
            <td id="logopic">
                <a href="/"><img src="/logo2.png" alt="CanopyMD logo Loves Park dermatology" /></a>
                <img src="/hollowing-eyes.jpg" />
            </td>
        </tr>
    </table>

<?php echo $includes[1]; ?>