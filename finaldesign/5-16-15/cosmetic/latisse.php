<!DOCTYPE html>
<html>
<head>
    <title>Latisse - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Latisse</h1>
        <p>LATISSE® solution is a prescription treatment for hypotrichosis used to grow eyelashes, making them longer, thicker and darker.</p>
        <p>Eyelash hypotrichosis is another name for having inadequate or not enough eyelashes. LATISSE® is the first and only FDA-approved prescription treatment for inadequate or not enough eyelashes, growing them longer, fuller and darker.</p>
    </div>
    <table id="center">
        <tr>
            <td id="logopic">
                <a href="/"><img src="/logo2.png" alt="CanopyMD logo Loves Park dermatology" /></a>
                <img src="/between-brow-wrinkles.jpg" />
            </td>
        </tr>
    </table>

<?php echo $includes[1]; ?>