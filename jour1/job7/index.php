<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison</title>
</head>
<body>

<form method="post">
    <input type="number" name="largeur" placeholder="Largeur" required>
    <input type="number" name="hauteur" placeholder="Hauteur" required>
    <button type="submit">Construire</button>
</form>

<pre>
<?php
if (isset($_POST["largeur"], $_POST["hauteur"])) {
    $largeur = (int) $_POST["largeur"];
    $hauteur = (int) $_POST["hauteur"];

    /* TOIT */
    $toitHauteur = intdiv($largeur, 2);

    for ($i = 0; $i < $toitHauteur; $i++) {
        echo str_repeat(" ", $toitHauteur - $i);
        echo "/";
        echo str_repeat(" ", $i * 2);
        echo "\\\n";
    }

    echo "/";
    echo str_repeat("_", $largeur);
    echo "\\\n";

    /* MURS */
    for ($i = 0; $i < $hauteur; $i++) {
        echo "|";
        echo str_repeat(" ", $largeur);
        echo "|\n";
    }

    echo "|";
    echo str_repeat("_", $largeur);
    echo "|\n";
}
?>
</pre>

</body>
</html>
