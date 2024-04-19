<?session_start();?>
<?php global $connect;
include ('connections.php')?>
<html>
<head>

</head>
<body>
<?php include ('header.php')?>

<section class="kop"><div id="bestel">registreren</div></section>


<section class="inlog_boks">
  <div class="inloggen">
  <h2>Registratieformulier</h2>
    <form action="registreer_script.php" method="POST">
        <label class="email-ww" for="gebruikersnaam">Gebruikersnaam:</label><br>
        <input class="inlog-typen" type="text" id="gebruikersnaam" name="gebruikersnaam" required><br><br>

        <label class="email-ww" for="email">E-mailadres:</label><br>
        <input class="inlog-typen" type="email" id="email" name="email" required><br><br>

        <label class="email-ww" for="password">Wachtwoord:</label><br>
        <input class="inlog-typen" type="password" id="password" name="password" required><br><br>

        <input  class="inlog_knop2" type="submit" value="Registreren">
    </form>
    </div>
</section>
<section class="blank"></section>
<section class="blank"></section>

<?php include ('footer.php')?>
</body>
</html>

<?php
