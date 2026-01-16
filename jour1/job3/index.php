<?php
echo" le nombre d’arguments :".count($_POST);

?>

<form method="post">
    <input type="nom" required>
    <input type="prenom" required>
    <button type="submit">Envoyer</button>

</form>