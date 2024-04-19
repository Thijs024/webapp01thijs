<?php
session_start();

// Sessie vernietigen om de gebruiker uit te loggen
session_destroy();

// Doorsturen naar een andere pagina na uitloggen
header("Location: index.php"); 
exit();
?>
