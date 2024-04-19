<?php
include('connections.php');
try {
    // Verbinding maken met de database
    $connect = new PDO($dsn, $user, $pass, $opt);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het formulier verwerken
        $name = $_POST['naam'];
        $type = $_POST['type'];
        $price = $_POST['price'];

        // Query voorbereiden om pizza toe te voegen
        $stmt = $connect->prepare("INSERT INTO drinks (name, type, price) VALUES (:name, :type, :price)");

        // Bind parameters en voer de query uit
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->bindParam(':price', $price);
       

        if ($stmt->execute()) {
            echo "drinken succesvol toegevoegd!";
        } else {
            echo "Er is een fout opgetreden bij het toevoegen van de pizza.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>
