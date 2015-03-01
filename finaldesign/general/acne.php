<!DOCTYPE html>
<html>
<head>
    <title>Acne - CanopyMD</title>

    <?php
    $links = file_get_contents("../include.txt");
    $includes = explode("~",$links);
    echo $includes[0]; ?>

    <div id="text">
        <h1>Acne</h1>
        <p>Acne  is characterized by pimples that appear on the face, back and chest. It is important for patients not to pick or scratch at individual lesions because it can make them inflamed and can lead to long-term scarring.</p>
        <p>Treating acne is a relatively slow process; there is no overnight remedy. Some treatments include Benzoyl Peroxide, Oral and Topical Antibiotics, Hormonal Treatments, Tretinoin, and Extraction. </p>
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