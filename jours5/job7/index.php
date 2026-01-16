<?php
function gras($str)
{
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (ctype_upper($word[0])) {
            $word = "<b>$word</b>";
        }
    }
    return implode(" ", $words);
}

function cesar($str, $decalage = 2)
{
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $result .= chr(ord($str[$i]) + $decalage);
    }
    return $result;
}

function plateforme($str)
{
    $words = explode(" ", $str);
    foreach ($words as &$word) {
        if (str_ends_with($word, "me")) {
            $word .= "_";
        }
    }
    return implode(" ", $words);
}
?>

<form method="post">
    <input type="text" name="str" required>
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">césar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <button type="submit">Valider</button>
</form>

<?php
if (!empty($_POST)) {
    $str = $_POST['str'];
    $fonction = $_POST['fonction'];

    if ($fonction === "gras") {
        echo gras($str);
    } elseif ($fonction === "cesar") {
        echo cesar($str);
    } elseif ($fonction === "plateforme") {
        echo plateforme($str);
    }
}
?>