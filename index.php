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

