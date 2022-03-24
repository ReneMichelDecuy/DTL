<?php
session_start();
include "utilisateur.php";
try {
    $Base = new PDO('mysql:host=localhost;dbname=Utilisateur', '', '');
} catch (Exception $e) {
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <link rel="icon" type="image/png" sizes="16x16" href="icone.png">
    <title>DTL</title>
</head>

<body>
    <?php
    if (isset($_POST["btnConnect"])) {
        $Req = $Base->query("SELECT * FROM test WHERE Nom = '" . $_POST["txtnom"] . "'");
        $test = $Req->fetch();
        if (isset($test["ID"])) {
            $user = new utilisateur($test["ID"],$test["Identifiant"],$test["MotDePasse"]);
            echo "Bienvenue " . $user->getnom();
        } else echo "Utilisateur inconnu";
        ?>
</body>

</html>