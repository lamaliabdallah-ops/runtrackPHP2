<?php
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 0);
    $nbvisites = 0;
} else {
    if (isset($_COOKIE['nbvisites'])) {
        $nbvisites = $_COOKIE['nbvisites'] + 1;
    } else {
        $nbvisites = 1;
    }
    setcookie('nbvisites', $nbvisites);
}
?>

<!DOCTYPE html>
<html>
<body>
    <p>Nombre de visites : <?= $nbvisites ?></p>

    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>