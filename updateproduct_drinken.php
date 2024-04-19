<?php

include('connections.php');
try {
    // Verbinding maken met de database
    $connect = new PDO($dsn, $user, $pass, $opt);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het formulier verwerken
        $drink_id = $_POST['drink_id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $price = $_POST['price'];

        // Query voorbereiden om pizza toe te voegen
        $stmt = $connect->prepare("UPDATE drinks SET name =:name, type =:type, price=:price WHERE drink_id=:drink_id");

        // Bind parameters en voer de query uit
        $stmt->bindParam(':drink_id', $drink_id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':price', $price);
       

        if ($stmt->execute()) {
            echo "drink succesvol updated!";
        } else {
            echo "Er is een fout opgetreden bij het toevoegen van de pizza.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>
