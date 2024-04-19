<?php
include ('connections.php');

// Zoekopdracht ophalen uit GET-parameter
$filter = $_GET['zoekopdracht'];

// Query voorbereiden om alle producten op te halen
$sql = "SELECT * FROM pizza";
$pizza = $connect->prepare($sql);
$pizza->execute();
$producten = $pizza->fetchAll();
 
// Array om de resultaten van de zoekopdracht op te slaan
$gevonden_producten = [];



// Loop door alle producten om te zoeken naar overeenkomsten met de zoekopdracht
foreach ($producten as $product) {
    if (strpos($product['naam'], $filter) !== false) {
        // Als de zoekterm voorkomt in de naam van het product, voeg het product toe aan de gevonden producten
        $gevonden_producten[] = $product;
    }
}

// Nu heb je de gevonden producten in de array $gevonden_producten
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoekresultaten</title>
</head>
<body>
    <h2>Zoekresultaten</h2>
    <?php if (empty($gevonden_producten)): ?>
        <p>Geen resultaten gevonden voor "<?php echo $filter; ?>"</p>
    <?php else: ?>
        

    
    
    <section class="bestel">
        <div class="block_bestel">
        <div><img class="foto_pizza" src="<?php echo $product['img']; ?>" alt="test"></div>
        <div class="naam"><?php echo $product['naam'];?></div>
        <div class="beschrijving"><?php echo $product['omschrijving'] ?></div>
        <div class="prijs"><?php echo $product['prijs'] ?></div>
        <button class="bestellen"> bestel </button>
        </div>
        <div class="blank_div"></div>

    </section>



    <?php endif; ?>
</body>
</html>
