<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$resultat = "";

for ($i = 0; $i < strlen($str); $i++) {
    if ($i == strlen($str) - 1) {
        $resultat .= $str[0];
    } else {
        $resultat .= $str[$i + 1];
    }
}

echo $resultat;
