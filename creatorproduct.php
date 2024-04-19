<?php
include('connections.php');
try {
    // Verbinding maken met de database
    $connect = new PDO($dsn, $user, $pass, $opt);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het formulier verwerken
        $naam = $_POST['naam'];
        $omschrijving = $_POST['omschrijving'];
        $prijs = $_POST['prijs'];

        // Query voorbereiden om pizza toe te voegen
        $stmt = $connect->prepare("INSERT INTO pizza (naam, omschrijving, prijs) VALUES (:naam, :omschrijving, :prijs)");

        // Bind parameters en voer de query uit
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':omschrijving', $omschrijving);
        $stmt->bindParam(':prijs', $prijs);
       

        if ($stmt->execute()) {
            echo "Pizza succesvol toegevoegd!";
        } else {
            echo "Er is een fout opgetreden bij het toevoegen van de pizza.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>
