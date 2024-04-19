<html>
<head>
</head>
<body>
<h1>Registreer hier een gebruiker</h1>
<form action="register.php" method="POST">
    <input type="text" name="gebruikersnaam">
    <input type="password" name="wachtwoord">
    <input type="submit" value="registreer">
    <h1>Log hier in</h1>
    <form action="register.php" method="POST">
        <input type="text" name="gebruikersnaam">
        <input type="password" name="wachtwoord">
        <input type="submit" value="registreer">
</body>
</html>
<?php
include 'Connection.php';
$user = $_POST['username'];
$pass = $_POST['pasword'];
$sql = "
INSERT INTO gebruikers (username, pasword);
VALUES ('$user', '$pass')";
$conn->exec($sql);
?>
<?php
foreach ($result as $row){
    echo '<h1>'. $row["username"]  .'</h1>';
    echo '<h3>'. $row["pasword"] . '</h3>';
}
