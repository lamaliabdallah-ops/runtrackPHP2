<?php
$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$voyelles = "aeiouyAEIOUY";
$dic = [
    "voyelles" => 0,
    "consonnes" => 0
];

for ($i = 0; $i < strlen($str); $i++) {
    if (ctype_alpha($str[$i])) {
        if (strpos($voyelles, $str[$i]) !== false) {
            $dic["voyelles"]++;
        } else {
            $dic["consonnes"]++;
        }
    }
}
?>
<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?= $dic["voyelles"] ?></td>
            <td><?= $dic["consonnes"] ?></td>
        </tr>
    </tbody>
</table>
