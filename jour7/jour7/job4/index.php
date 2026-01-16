<?php
if (isset($_POST["deco"]))
    setcookie("prenom", "", time() - 1);

if (isset($_POST["prenom"]))
    setcookie("prenom", $_POST["prenom"]);
?>

<!DOCTYPE html>
<html>
<body>

<?php if (!isset($_COOKIE["prenom"])) { ?>
<form method="post">
    <input type="text" name="prenom">
    <button type="submit" name="connexion">Connexion</button>
</form>
<?php } else { ?>
<p>Bonjour <?= $_COOKIE["prenom"] ?> !</p>
<form method="post">
    <button type="submit" name="deco">Déconnexion</button>
</form>
<?php } ?>

</body>
</html>