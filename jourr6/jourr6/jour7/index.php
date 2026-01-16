<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);

    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($croissant) {
                // Ordre croissant
                if ($tab[$j] > $tab[$j + 1]) {
                    $tmp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $tmp;
                }
            } else {
                // Ordre décroissant
                if ($tab[$j] < $tab[$j + 1]) {
                    $tmp = $tab[$j];
                    $tab[$j] = $tab[$j + 1];
                    $tab[$j + 1] = $tmp;
                }
            }
        }
    }

    return $tab;
}
?>