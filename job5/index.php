<form method="post">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <button type="submit">Connexion</button>

    <?php
    if (isset($_POST["username"], $_POST["password"])) {
        if ($_POST["username"] === "john" && $_POST["password"] === "Rombo") {
            echo "c'est pas ma guerre";
        } else {
            echo "votre pire cauchemar";
        }
    }
    ?>
</form>
