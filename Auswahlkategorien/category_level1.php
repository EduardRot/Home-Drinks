<?php

?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="..\CSS/StyleSheet.css">
        <title>Willkommen bei Home Drinks</title>
    </head>
    <body>
          <!---- Hier ist die Menüleiste--->
            <nav id="navigation" class="clearfix">
            <ul>
            <li><a href="../startseite.cshtml">Startseite</a></li>
            <li><a href="../favoriten.cshtml">Favoriten</a></li>
            <li><a href="../einkaufsliste">Einkaufliste</a></li>
            <li><a href="../cocktailliste">Cocktail-Liste</a></li>
            <li><a href="#">Log-In</a></li>
            </ul>
            </nav>
    <!---- Hier endet die Menüleiste--->
        <button class="buttoncategory" onclick="location.href='../index.php?p1=2'">Spirituosen Weiß</button>
        <button class="buttoncategory" onclick="location.href='../index.php?p1=1'">Spirituosen Braun</button>
        <button class="buttoncategory" onclick="location.href='category_level2_alcoholfree.cshtml'">Spirituosen Säfte, Syrup und co.</button>
        <button class="buttoncategory" onclick="location.href='category_level2_extras.cshtml'">Früchte, Extras</button>
        
    </body>
</html>
