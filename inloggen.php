<?session_start();?>
<?php global $connect;
include ('connections.php')?>
<html>
<head>

</head>
<body>
<?php include ('header.php')?>

<section class="kop"><div id="bestel">inloggen</div></section>


<section class="inlog_boks">

    </div>
    <div class="inloggen2">
    <h2>Inloggen</h2>
    <form action="inloggen_script.php" method="POST">
        <label class="email-ww" for="gebruikersnaam">Gebruikersnaam:</label><br>
        <input class="inlog-typen" type="text" id="gebruikersnaam" name="gebruikersnaam" required>

        <label class="email-ww" for="wachtwoord">Wachtwoord:</label><br>
        <input class="inlog-typen" type="password" id="password" name="password" required>
        <div class="regestreren">
            <div>
            <h2 id="geen_account">nog geen account?</h2>
            </div>
            
            <div>
            <img id="arrow" src="img/Arrow .png" alt="pijl">

            </div>
          <a id="registreren" href="registreren.php">registreren</a>  `
        </div>

        <input class="inlog_knop"  type="submit" value="inloggen">
    </form>
    </div>


</section>
<section class="blank"></section>
<section class="blank"></section>
  



<?php include ('footer.php')?>
</body>
</html>

<?php
