<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['prenom'])) {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <input type="text" name="prenom">
        <button type="submit">Ajouter</button>
    </form>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

    <ul>
        <?php foreach ($_SESSION['prenoms'] as $prenom): ?>
            <li><?= $prenom ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>