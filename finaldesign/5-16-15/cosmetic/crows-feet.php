<?php
$links = file_get_contents("../include.txt");
$includes = explode("~",$links);
echo $includes[0]; ?>

    <div id="text">
        <h1>Crows Feet</h1>
        <p>Crows feet & hollowing temples come with age and are the result of thin skin surrounding the eyes, lack of a fatty tissue layer below the skins surface, and various facial expressions such as squinting frequently.</p>
        <p>At CanopyMD we offer a variety of options to improve these areas. One option is injectable fillers such as <a href="radiesse.php"> Radiesse</a>, <a href="juvederm.php">Juvederm</a>, or <a href="sculptra.php">Sculptra</a> to fill the temporal area. To treat crows feet, products such as <a href="botox.php">Botox</a>, <a href="dysport.php">Dysport</a> or <a href="xeomin.php">Xeomin</a> offer noticeable results within a couple days with little pain.</p>
        <p>Bruising may occur and can last one to two weeks. All of our injectable fillers are safe to use and approved by the FDA. For a quick fix for your crows CanopyMD have you covered. 
		<p>View our before & after photos!</p>
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