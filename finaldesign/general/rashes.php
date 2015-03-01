<!DOCTYPE html>
<html>
<head>
    <title>Rashes - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Rashes</h1>
        <p>"Rash" is a general term for a wide variety of skin conditions. A rash refers to a change that affects the skin and usually appears as a red patch or small bumps or blisters on the skin. The majority of rashes are harmless and can be treated effectively with over-the-counter anti-itch creams, antihistamines and moisturizing lotions.</p>
        <p>Rashes can be a symptom for other skin problems. The most prevalent of these are atopic Dermatitis, bacterial infections, contact dermatitis, chronic skin problems, fungal infections, and viral infections.
        <p>A rash may be a sign of a more serious illness, such as Lyme Disease, Rocky Mountain Spotted Fever, liver disease, kidney disease or some types of cancers. If you experience a rash that does not go away on its own after a few weeks, make an appointment to see one of our dermatologists to have it properly diagnosed and treated.</p>
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