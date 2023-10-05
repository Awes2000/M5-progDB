<?php
// Include dbdata.php om de database-instellingen op te halen
include_once('dbdata.php');

// Databaseverbinding maken
$connection = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

// Controleer of de verbinding is geslaagd
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully to the database.";

// Voorbeeldquery
$query = "SELECT * FROM your_table_name"; // Vervang your_table_name met de daadwerkelijke tabelnaam

// Uitvoeren van de query
$result = $connection->query($query);

// Controleer of de query is geslaagd
if ($result) {
    // Verwerk de resultaten
    while ($row = $result->fetch_assoc()) {
        // Doe iets met de resultaten
        // Bijvoorbeeld: echo $row['column_name'];
    }
} else {
    echo "Error executing the query: " . $connection->error;
}

// Sluit de databaseverbinding
$connection->close();
?>
