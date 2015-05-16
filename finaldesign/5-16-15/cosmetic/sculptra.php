<!DOCTYPE html>
<html>
<head>
    <title>Sculptra - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Sculptra</h1>
        <p>Sculptra Aesthetic is a new type of facial injectable made from poly-L-lactic acid, which helps to replace lost collagen.</p>
        <p>It helps correct shallow to deep facial wrinkles, and folds, that appear with aging by replacing lost collagen. The main ingredient is a biocompatible, biodegradable synthetic material that has been used by physicians for decades.</p>
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