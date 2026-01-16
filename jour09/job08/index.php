<?php
// Connexion à la base de données
$mysqli = new mysqli("localhost", "root", "", "jour8");

if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
}

// Requête SQL pour récupérer tous les étudiants
$sql = "SELECT SUM(capacite) AS capacite_total FROM salles";
$result = $mysqli->query($sql);

if (!$result) {
    die("Erreur lors de l'exécution de la requête : " . $mysqli->error);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 01 - Liste des étudiants</title>
</head>
<body>

<h2>Liste des étudiants</h2>

<?php
// Affichage du tableau avec border="1"
if ($result->num_rows > 0) {
    echo "<table border='1' cellpadding='5' cellspacing='0'>";
    
    // Entête du tableau
    echo "<thead><tr>";
    foreach ($result->fetch_fields() as $field) {
        echo "<th>{$field->name}</th>";
    }
    echo "</tr></thead>";
    
    // Corps du tableau
    echo "<tbody>";
    $result->data_seek(0); // remettre le curseur au début
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>$value</td>";
        }
        echo "</tr>";
    }
    echo "</tbody>";
    
    echo "</table>";
} 


// Fermeture de la connexion
$mysqli->close();
?>

</body>
</html>
