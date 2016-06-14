<?php
    require_once  ("Connection/connection.php");
    $sql = "SELECT * FROM zutaten";
    $result = mysqli_query($conn, $sql);

    
   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ZID"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}
?>

<!DOCTYPE html>

<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta charset="utf-8" />

        <title>Willkommen bei Home Drinks</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
       

        <link href="~/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <link rel="stylesheet" href="CSS/StyleSheet.css">
        <script src="JavaScript/Script.js"></script>
        
    </head>
<!---- Wechsel zwischen Head und Body Bereich------------------------------------------------------------------------------------------------------>
    <body>
    <!---- Hier ist die Menüleiste--->
    <nav id="navigation" class="clearfix">
        <ul>
            <li><a href="startseite.cshtml">Startseite</a></li>
            <li><a href="favoriten.cshtml">Favoriten</a></li>
            <li><a href="einkaufsliste">Einkaufliste</a></li>
            <li><a href="cocktailliste">Cocktail-Liste</a></li>
            <li><a href="#">Log-In</a></li>
        </ul>
    </nav>
    <!---- Hier endet die Menüleiste--->



    <!---- Hier ist die Kategorieauswahl--->
    <button class="buttoncategory" onclick="location.href='Auswahlkategorien/category_level1.cshtml'">Zutaten hinzufügen +</button>
    <!---- Hier endet die Kategorieauswahl--->
    @*<!---- Suchfeld--->

    
        <input type="text" name="search" list="search" id="searchfield">

            <datalist id="search">    
                @foreach( var row in data){
                 <option value="@row.Name"></option>
                }
            </datalist>
        </input>

        <button id="btnName">Click me!</button>
   
    <!---- Suchfeld--->*@ 

    </body>
</html>