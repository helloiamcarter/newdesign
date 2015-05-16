<!DOCTYPE html>
<html>
<head>
    <title>Juvederm - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Juvederm</h1>
        <p>JUVÉDERM® XC is the smooth gel filler that your doctor uses to instantly smooth away wrinkles around your mouth and nose. With just one treatment, you’ll get smooth and natural-looking results that last up to a year.</p>
        <p>Everyone’s skin ages differently and JUVÉDERM® XC may be used to rejuvenate multiple problem areas. From smile lines to vertical lip lines, you can smooth away unwanted wrinkles and restore natural contours.</p>
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