<?php

include('connections.php');
try {
    // Verbinding maken met de database
    $connect = new PDO($dsn, $user, $pass, $opt);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Gegevens van het formulier verwerken
        $pizza_id = $_POST['pizza_id'];




        // Query voorbereiden om pizza toe te voegen
        $stmt = $connect->prepare("DELETE FROM pizza WHERE pizza_id=:pizza_id");

        // Bind parameters en voer de query uit
        $stmt->bindParam(':pizza_id', $pizza_id);





        if ($stmt->execute()) {
            echo "Pizza succesvol delete";
        } else {
            echo "Er is een fout opgetreden bij het delete van de pizza.";
        }
    }
} catch (PDOException $e) {
    echo "Fout: " . $e->getMessage();
    die("Sorry, er is een databaseprobleem opgetreden.");
}
