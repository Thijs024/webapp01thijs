<?php

include('connections.php');
try {
    // Verbinding maken met de database
    $connect = new PDO($dsn, $user, $pass, $opt);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het formulier verwerken
        $pizza_id = $_POST['pizza_id'];
        $naam = $_POST['naam'];
        $omschrijving = $_POST['omschrijving'];
        $prijs = $_POST['prijs'];

        // Query voorbereiden om pizza toe te voegen
        $stmt = $connect->prepare("UPDATE pizza SET naam =:naam, omschrijving =:omschrijving, prijs=:prijs WHERE pizza_id=:pizza_id");

        // Bind parameters en voer de query uit
        $stmt->bindParam(':pizza_id', $pizza_id);
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':omschrijving', $omschrijving);
        $stmt->bindParam(':prijs', $prijs);
       

        if ($stmt->execute()) {
            echo "Pizza succesvol updated!";
        } else {
            echo "Er is een fout opgetreden bij het updaten van de pizza.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
?>
