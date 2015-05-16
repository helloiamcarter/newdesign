<!DOCTYPE html>
<html>
<head>
    <title>Botox - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Botox</h1>
        <p>BOTOX® Cosmetic is a prescription medicine that is injected into muscles and used to improve the look of moderate-to-severe frown lines between the brows in people 18 to 65 years of age for a short period of time (temporary).</p>
        <p>BOTOX® Cosmetic is administered by a healthcare professional as a simple, nonsurgical treatment that is injected directly into the muscles between the brows. It works by blocking nerve impulses to the injected muscles. This reduces muscle activity that causes moderate to severe lines to form between the brows.</p>
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