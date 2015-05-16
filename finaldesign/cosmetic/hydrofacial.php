<!DOCTYPE html>
<html>
<head>
    <title>Hydrofacial - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Hydrofacial</h1>
        <p>The HydraFacial™ treatment is a new breakthrough in aesthetic technology. This ability to moisturize the skin separates the HydraFacial™ from all other skin resurfacing procedures.</p>
        <p>The HydraFacial™ treatment removes dead skin cells and extracts impurities while simultaneously bathing the new skin with cleansing, hydrating and moisturizing serums. The treatment is soothing, refreshing, non-irritating and immediately effective.</p>
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