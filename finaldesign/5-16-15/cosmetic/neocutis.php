<!DOCTYPE html>
<html>
<head>
    <title>Neocutis - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Neocutis</h1>
        <p>Formulated with the precision of Swiss technology, the scientifically advanced skincare product NeoCutis has been created to supplement your daily skincare routine. These products can be used to enhance the overall health and appearance of skin.</p>
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