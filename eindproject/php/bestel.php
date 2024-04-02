<?php global $connect;
include ('connections.php')?>
<html>
<head>

</head>
<body>
<?php include ('header.php')?>

<?php
$sql = "SELECT * FROM pizza";
$stmt = $connect->prepare($sql);
$stmt->execute();
$products = $stmt->fetchall();
$result =0;
$row = $result->fetch_array();

foreach ($products as $product)
{
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['afbeelding_url']).'"/>';
    echo "<div class='menu-items'>";
    echo "<p>" . $product['omschrijving'] . "</p>";
    echo "<p>Prijs: €" . $product['prijs'] . "</p>";
    echo "</div>";

}

    ?>

<?php include ('footer.php')?>
</body>
</html>

<?php
