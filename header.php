<?php include('connections.php') ?>
<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<header>

    <section class="header">
        <div>
            <ul>
                <img class="logo" src="img/'t%20om%20het%20hoekje_transparent%201.png">
                <nav>

                    <div class="home_contact">
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="contact.php">contact</a></li>
                    </div>
                    <form class="zoeken" action="zoeken_script.php" method="get">
                    <input class="zoek" placeholder="zoeken..." type="text" id="searchTerm" name="zoekopdracht">
        <button type="button" onclick="search()">Zoeken</button>

                    </form>
                    <div class="alle_pizzas_drinken">
                        <li><a href="bestel.php">alle pizza's</a></li>
                        <li><a href="bestel_drinken.php">drinken</a></li>
                    </div>
                    <div class="inlog_blok">
    <?php
   
    
    // Controleer of de gebruiker is ingelogd
    if(isset($_SESSION['gebruikersnaam'])) {
        // Als de gebruiker is ingelogd, toon een uitloglink
        echo '<li class="inlog"><a href="logout_script.php">Uitloggen</a></li>';
    } else {
        // Als de gebruiker niet is ingelogd, toon een inloglink
        echo '<li class="inlog"><a href="inloggen.php">Inloggen</a></li>';
    }
    ?>
</div>

                </nav>

            </ul>
        </div>

    </section>

</header>

<body>

</body>
</html>

