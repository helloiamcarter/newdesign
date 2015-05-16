<!DOCTYPE html>
<html>
<head>
    <title>Exilis - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Exilis</h1>
        <p>BTL's Exilis offers a revolutionary non-invasive form of treatment for the reduction of wrinkles and for the reshaping of targeted fat deposits. Exilis also complements pre and post treatment in invasive liposuction techniques.</p>
        <p>Exilis treatments can postpone or eliminate the need for invasive surgery particularly for patients with mild to moderate fat deposits and who may not be candidates for lipoplasty.</p>
        <p>The Exilis device is FDA-cleared in the United States for the primary treatment of dermatology and general surgical procedures for non-invasive treatment of wrinkles and rhytids.</p>
        <p>Exilis uses controlled heating to the tissue through uniform molecule excitation, combined with the beneficial effects of the mechanical waves. The Exilis provides effective body contouring via fat volume reduction and skin tightening for a wide variety of clients.</p>
        <p>Exilis is the fastest body contouring treatment available. Most patients are treated in four twenty-minute sessions.</p>
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