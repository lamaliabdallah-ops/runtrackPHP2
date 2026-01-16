<?php
$style="style1";

// Si le formulaire est envoyé
if (isset($_POST["style"])) {
    $style = $_POST["style"];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Changement de style</title>
    <link rel="stylesheet" href="<?=  $style ; ?>.css">
</head>
<body>

<form method="post" action="">
    <h2>Choisissez un style</h2>

    <select name="style">
        <option value="style1" >Style 1</option>
        <option value="style2" >Style 2</option>
        <option value="style3" >Style 3</option>


        
    </select>

    <br><br>

    <button type="submit">Appliquer le style</button>
</form>

</body>
</html>