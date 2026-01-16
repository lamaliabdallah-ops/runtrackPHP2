<form method="GET">
    <input type="number" name="nombre">
    <button>TESTER</button>

    <?php
    if (isset($_GET["nombre"])) {
        $nombre = (int) $_GET["nombre"];
        if ($nombre % 2 === 0) {
            echo "nombre pair";
        } else {
            echo "nombre impair";
        }
    }
    ?>
</form>
