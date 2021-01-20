<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();

// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['prenom'] = 'Ahmed';
$_SESSION['nom'] = 'ghanem';
$_SESSION['age'] = 33;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    <p>
        Salut <?php echo $_SESSION['prenom']; ?> !<br />
        <?php echo $_SESSION['nom']; ?> !<br />
        <?php echo $_SESSION['age']; ?> !<br />
    </p>
    </body>
</html>