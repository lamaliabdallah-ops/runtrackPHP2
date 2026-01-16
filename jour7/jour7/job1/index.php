<?php
$nbvisites = 0;

if (isset($_POST['reset'])) {
    $nbvisites = 0;
} else {
    $nbvisites++;
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