<?php
    include  ("Connection/connection.php");
    $s = $_GET['p1'];
    $sql = "SELECT * FROM zutaten WHERE ZID =".$s ;
    $result = mysqli_query($conn, $sql);
    session_start();
    
    $zutaten = $_SESSION["zutaten"];
    if (!$zutaten){
        $zutaten=array();
    }


   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($zutaten,$row["name"]);
    }
} else {
    echo "0 results";
}
$_SESSION["zutaten"]=$zutaten;
print_r($zutaten);
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
            <li><a href="index.php">Startseite</a></li>
            <li><a href="favoriten.php">Favoriten</a></li>
            <li><a href="einkaufsliste">Einkaufliste</a></li>
            <li><a href="cocktailliste">Cocktail-Liste</a></li>
            <li><a href="#">Log-In</a></li>
        </ul>
    </nav>
    <!---- Hier endet die Menüleiste--->



    <!---- Hier ist die Kategorieauswahl--->
    <button class="buttoncategory" onclick="location.href='Auswahlkategorien/category_level1.php'">Zutaten hinzufügen +</button>
    <!---- Hier endet die Kategorieauswahl--->


    </body>
</html>