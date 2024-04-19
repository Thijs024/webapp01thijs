<?session_start();?>
<?php global $connect;
include ('connections.php')?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php require ('header.php'); ?>
<section class="kop"><div id="bestel">admin</div></section>
<section class="blank"></section>
<section id="admin-boks-pizza">
    <div class="admin-blok">
        <h2>producten toevoegen pizza</h2>
        <form class="product-toevoegen" action="creatorproduct.php" method="POST" enctype="multipart/form-data">
        <label for="naam">Naam:</label><br>
        <input class="toevoegen"  type="text" id="naam" name="naam" required><br><br>

        <label for="omschrijving">omschrijving:</label><br>
        <textarea class="toevoegen" id="omschrijving" name="omschrijving" required></textarea><br><br>

        <label for="prijs">Prijs:</label><br>
        <input class="toevoegen" type="number" id="prijs" name="prijs" min="0" step="0.01" required><br><br>


        <input class="toevoegen" type="submit" value="Toevoegen">
        </form>
        <h2>producten veranderen pizza</h2>
        <form class="product-toevoegen" action="updateproduct.php" method="POST" enctype="multipart/form-data">      
        <label for="pizza_id">pizza_id:</label><br>
        <input class="toevoegen"  type="number" id="pizza_id" name="pizza_id" required><br><br>
                        
        <label for="naam">Naam:</label><br>
        <input class="toevoegen"  type="text" id="naam" name="naam" required><br><br>

        <label for="omschrijving">omschrijving:</label><br>
        <textarea class="toevoegen" id="omschrijving" name="omschrijving" required></textarea><br><br>

        <label for="prijs">Prijs:</label><br>
        <input class="toevoegen" type="number" id="prijs" name="prijs" min="0" step="0.01" required><br><br>


        <input class="toevoegen" type="submit" value="Toevoegen">
        </form>
        </form>
        <h2>producten verwijderen pizza</h2>
        <form class="product-toevoegen" action="deleteproduct.php" method="POST" enctype="multipart/form-data">      
        <label for="pizza_id">pizza_id:</label><br>
        <input class="toevoegen"  type="number" id="pizza_id" name="pizza_id" required><br><br>

        <input class="toevoegen" type="submit" value="delete">
        </form>
    </div>
</section>
<section class="blank"></section>
<section id="admin-boks-drinken">
    <div class="admin-blok">
        <h2>producten toevoegen drinken</h2>
        <form class="product-toevoegen" action="creatorproduct-drinken.php" method="POST" enctype="multipart/form-data">
        <label for="naam">Naam:</label><br>
        <input class="toevoegen" type="text" id="naam" name="naam" required><br><br>

        <label for="beschrijving">type:</label><br>
        <textarea class="toevoegen" id="type" name="type" required></textarea><br><br>

        <label for="price">Prijs:</label><br>
        <input class="toevoegen" type="number" id="price" name="price" min="0" step="0.01" required><br><br>

        <input class="toevoegen" type="submit" value="Toevoegen">
        </form>
        <h2>producten veranderen drinken</h2>
        <form class="product-toevoegen" action="updateproduct_drinken.php" method="POST" enctype="multipart/form-data">
        <label for="drink_id">drink_id:</label><br>
        <input class="toevoegen"  type="number" id="drink_id" name="drink_id" required><br><br>

        <label for="name">Naam:</label><br>
        <input class="toevoegen"  type="text" id="name" name="name" required><br><br>

        <label for="type">omschrijving:</label><br>
        <textarea class="toevoegen" id="type" name="type" required></textarea><br><br>

        <label for="price">Prijs:</label><br>
        <input class="toevoegen" type="number" id="price" name="price" min="0" step="0.01" required><br><br>

        <input class="toevoegen" type="submit" value="Toevoegen">
        </form>
        <h2>producten verwijderen drinks</h2>
        <form class="product-toevoegen" action="deleteproduct_drinken.php" method="POST" enctype="multipart/form-data">      
        <label for="drink_id">pizza_id:</label><br>
        <input class="toevoegen" type="number" id="drink_id" name="drink_id" required><br><br>

        <input class="toevoegen" type="submit" value="delete">
        </form>
    </div>
  

</section>
<?php include ('menu_admin.php');?>
<?php include ('bestel-drinken.php')?>
<section class="blank"></section>
<?php require ('footer.php');?>
</body>
</html>